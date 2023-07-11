<?php
return [
    "roles" => [
        "roles" => ["read", "create", "update", "delete"],
        "admins" => ["read", "create", "update", "delete", "updateProfile"],
        "sliders" => ["read", "create", "update", "delete"],
        "features" => ["read", "create", "update", "delete"],
        "gym_classes" => ["read", "create", "update", "delete"],
        "days" => ["read", "create", "update", "delete"],
        "class_schedules" => ["read", "create", "update", "delete"],
        "branch_points" => ["read", "create", "update", "delete","edit_page"],
        "branches" => ["read", "create", "update", "delete", "edit_nile"],
        "packages" => ["read", "create", "update", "delete", "edit_our_package"],
        "teams" => ["read", "create", "update", "delete", 'edit_our_trainers'],
        "galleries" => ["read", "create", "update", "delete", 'edit_our_gallery'],
        "partners" => ["read", "create", "update", "delete"],
        "blog" => ["read", "create", "update", "delete"],
        "events" => ["read", "create", "update", "delete", "subscribes"],
        "comments" => ["read", "update", "delete", "approval"],
        "pages" => ["read", "create", "update"],
        "contacts" => ["read", "create", "update", "delete"],
        "settings" => ["read", "update"],
    ],
];
