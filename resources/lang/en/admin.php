<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => "ID",
            'first_name' => "First name",
            'last_name' => "Last name",
            'email' => "Email",
            'password' => "Password",
            'password_repeat' => "Password Confirmation",
            'activated' => "Activated",
            'forbidden' => "Forbidden",
            'language' => "Language",
                
            //Belongs to many relations
            'roles' => "Roles",
                
        ],
    ],

    'about' => [
        'title' => 'Abouts',

        'actions' => [
            'index' => 'Abouts',
            'create' => 'New About',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'keterangan' => "Keterangan",
            'created_by' => "Created by",
            'updated_by' => "Updated by",
            'count' => "Count",
            'name' => "Name",
            'birthday' => "Birthday",
            'phone' => "Phone",
            'email' => "Email",
            'website' => "Website",
            'address' => "Address",
            
        ],
    ],

    'skill' => [
        'title' => 'Skills',

        'actions' => [
            'index' => 'Skills',
            'create' => 'New Skill',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'name' => "Name",
            'persen' => "Persen",
            
        ],
    ],

    'pengalaman' => [
        'title' => 'Pengalamans',

        'actions' => [
            'index' => 'Pengalamans',
            'create' => 'New Pengalaman',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'pengalaman' => "Pengalaman",
            'date' => "Date",
            'perusahaan' => "Perusahaan",
            
        ],
    ],

    'pendidikan' => [
        'title' => 'Pendidikans',

        'actions' => [
            'index' => 'Pendidikans',
            'create' => 'New Pendidikan',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'name' => "Name",
            'level' => "Level",
            'alamat' => "Alamat",
            'date' => "Date",
            
        ],
    ],

    'pengalaman' => [
        'title' => 'Pengalamans',

        'actions' => [
            'index' => 'Pengalamans',
            'create' => 'New Pengalaman',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'pengalaman' => "Pengalaman",
            'date' => "Date",
            'perusahaan' => "Perusahaan",
            
        ],
    ],

    'wawasan' => [
        'title' => 'Wawasans',

        'actions' => [
            'index' => 'Wawasans',
            'create' => 'New Wawasan',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'pengalaman' => "Pengalaman",
            'date' => "Date",
            'perusahaan' => "Perusahaan",
            
        ],
    ],

    'portfolio' => [
        'title' => 'Portfolios',

        'actions' => [
            'index' => 'Portfolios',
            'create' => 'New Portfolio',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'image' => "Image",
            'judul' => "Judul",
            'keterangan' => "Keterangan",
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];