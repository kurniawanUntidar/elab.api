<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table      = 'menus';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; // Atau 'object' jika Anda lebih suka
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'parent_id', 'title', 'url', 'icon', 'order_position', 'permission_id', 'is_active'
    ];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at'; // Hanya jika useSoftDeletes = true

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $afterDelete    = [];

    /**
     * Get all active menus, ordered by position,
     * with their sub-menus.
     * Optionally filtered by user permissions.
     *
     * @param bool $filterByPermission True to filter by current user's permissions
     * @return array
     */
    public function getMenus(bool $filterByPermission = true): array
    {
        $menus = $this->where('is_active', 1)
                      ->orderBy('order_position', 'asc')
                      ->findAll();

        $menuTree = [];
        $indexedMenus = [];

        // Index menus by ID for easy parent lookup
        foreach ($menus as $menu) {
            $indexedMenus[$menu['id']] = $menu;
            $indexedMenus[$menu['id']]['sub_menus'] = [];
        }

        // Build the tree
        foreach ($indexedMenus as &$menu) {
            if ($menu['parent_id'] === null) {
                // Top-level menu
                if (!$filterByPermission || $this->hasAccess($menu['permission_id'])) {
                    $menuTree[] = &$menu;
                }
            } else {
                // Sub-menu
                if (isset($indexedMenus[$menu['parent_id']])) {
                    // Only add if parent exists and current user has access to sub-menu
                    if (!$filterByPermission || $this->hasAccess($menu['permission_id'])) {
                        $indexedMenus[$menu['parent_id']]['sub_menus'][] = &$menu;
                    }
                }
            }
        }

        // Filter out parent menus that might not have accessible children or self-permission
        // This is a more complex step if you want to remove parents that have no allowed sub_menus
        // For simplicity, we'll assume if parent_id is NULL, its permission check is sufficient.
        // If a parent has a URL like '#', its visibility depends on its own permission_id.
        // If it has children, its sub_menus array will be populated (or not, based on permission_id of children).

        // Final filter for top-level menus if sub_menus are empty and parent has no explicit URL
        // Not strictly needed if `hasAccess` is robust, but can refine behavior.
        $finalMenuTree = [];
        foreach($menuTree as $mainMenu) {
            if (!empty($mainMenu['sub_menus']) || $mainMenu['url'] !== '#') {
                $finalMenuTree[] = $mainMenu;
            }
        }


        return $menuTree; // Atau $finalMenuTree jika Anda ingin filter lebih ketat
    }

    /**
     * Helper to check user access based on permission_id.
     * @param string|null $permissionName
     * @return bool
     */
    private function hasAccess(?int $permissionId): bool
    {
        // If no permission is required, grant access
        if ($permissionId === null || $permissionId === '') {
            return true;
        }

        // Check if user is logged in first
        if (! function_exists('logged_in') || ! logged_in()) {
            return false;
        }

        // Check if user has the specific permission
        if (function_exists('has_permission') && has_permission($permissionId)) {
            return true;
        }

        return false;
    }
}