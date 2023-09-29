<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function view($page): string
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }


        $parsed_title = ucfirst(str_replace('-', ' ', $page)); // Capitalize the first letter and replace "-" with spaces

        $data = [
            'title' => $parsed_title
        ];

        return view('pages/' . $page, $data);
    }
}
