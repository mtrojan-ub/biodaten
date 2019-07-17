<?php

namespace Biodaten;

define('DIR_TPL', '../tpl/');

define('DEFAULT_PAGE', 'home');
define('PAGES', [
    ['id' => 'home', 'title' => 'Home', 'navbar' => true],
    ['id' => 'about', 'title' => 'About this project', 'navbar' => true, 'homeImage' => 'biodaten_logo.jpg'],
    ['id' => 'news', 'title' => 'News', 'navbar' => true, 'homeImage' => 'biodaten_logo.jpg'],
    ['id' => 'details', 'title' => 'Details', 'navbar' => true, 'homeImage' => 'biodaten_logo.jpg'],
    ['id' => 'privacy', 'title' => 'Privacy'],
]);

function GetPageCards() {
    $cards = '';
    foreach (PAGES as $page) {
        if (isset($page['homeImage'])) {
            $cards .=
                '<div class="col-md-4">
                    <a href="'.GetPageUrl($page['id']).'">
                        <div class="card mb-4 shadow-sm">
                            <img src="img/'.$page['homeImage'].'" class="card-img-top" alt="'.$page['title'].'">
                            <div class="card-body">
                                <p class="card-text">'.$page['title'].'</p>
                            </div>
                        </div>
                    </a>
                </div>';
        }
    }
    return $cards;
}

function GetPageNavbarEntries() {
    $entries = '';
    foreach (PAGES as $page) {
        if (isset($page['navbar']) && $page['navbar'] === true) {
            $entries .=
            '<a href="'.GetPageUrl($page['id']).'" class="navbar-brand d-flex align-items-center">
                <strong>'.ucfirst($page['id']).'</strong>
            </a>';
        }
    }
    return $entries;
}

function GetPageNavbarEntriesExtended() {
    $entries = '';
    foreach (PAGES as $page) {
        $entries .= '<li><a href="'.GetPageUrl($page['id']).'" class="text-white">'.$page['title'].'</a></li>';
    }
    return $entries;
}

function GetPageUrl($id) {
    if ($id == DEFAULT_PAGE)
        return '/';
    else
        return '/?page=' . urlencode($id);
}

function GetPageTemplate() {
    $page = isset($_GET['page']) ? $_GET['page'] : DEFAULT_PAGE;
    $pageTemplate = is_file(DIR_TPL . $page . '.php') ? DIR_TPL . $page . '.php' : DEFAULT_PAGE . '.php';
    return $pageTemplate;
}

?>