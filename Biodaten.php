<?php

namespace Biodaten;

define('DIR_TPL', '../tpl/');

define('DEFAULT_PAGE', 'home');
define('PAGES', [
    ['id' => 'home', 'title' => 'Home', 'navbar' => true],
    ['id' => 'about', 'title' => 'About this project', 'navbar' => true, 'homeImage' => 'biodaten_logo.jpg'],
    ['id' => 'news', 'title' => 'News', 'navbar' => true, 'homeImage' => 'biodaten_logo.jpg'],
    ['id' => 'conferences', 'title' => 'Conferences', 'navbar' => true, 'homeImage' => 'biodaten_logo.jpg'],
    ['id' => 'links', 'title' => 'Links', 'footer' => true],
    ['id' => 'privacy', 'title' => 'Privacy', 'footer' => true],
    ['id' => 'imprint', 'title' => 'Imprint', 'footer' => true],
]);

function GetPageCards() {
    $cards = '';
    foreach (PAGES as $page) {
        if (isset($page['homeImage'])) {
            $cards .=
                '<div class="col-md-4">
                    <a href="'.GetPageUrl($page['id']).'">
                        <div class="card mb-4 shadow-sm">
                            <img src="img/'.htmlspecialchars($page['homeImage']).'" class="card-img-top" alt="'.htmlspecialchars($page['title']).'">
                            <div class="card-body">
                                <p class="card-text">'.htmlspecialchars($page['title']).'</p>
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

function GetPageFooterEntries() {
    $entries = '';
    foreach (PAGES as $page) {
        if (isset($page['footer']) && $page['footer'] === true) {
            $entries .= '<a href="'.GetPageUrl($page['id']).'">'.ucfirst($page['id']).'</a>';
        }
    }
    return $entries;
}

function GetPageUrl($id) {
    return ($id == DEFAULT_PAGE) ? '/' : '/?page=' . urlencode($id);
}

function GetPageTemplate() {
    $page = $_GET['page'] ?? DEFAULT_PAGE;
    $pageTemplate = is_file(DIR_TPL . $page . '.php') ? DIR_TPL . $page . '.php' : DIR_TPL . DEFAULT_PAGE . '.php';
    return $pageTemplate;
}
