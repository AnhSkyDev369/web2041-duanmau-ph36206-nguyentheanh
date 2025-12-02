<?php
// Kiểm tra login có quyền vào trang admin không
// TODO

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'                    => (new ProductController)->home(),
    //  CRUD Products
    'list-product'         => (new ProductController)->index(),
    'create-product'       => (new ProductController)->create(),
    'store-product'        => (new ProductController)->store(),
    'delete-product'       => (new ProductController)->delete(),

    //  CRUD Categories
    'list-category'        => (new CategoryController)->index(),
    'create-category'      => (new CategoryController)->create(),
    'store-category'       => (new CategoryController)->store(),
    'delete-category'      => (new CategoryController)->delete(),

    //  CRUD Comments
    'list-comment'         => (new CommentController)->index(),
    'create-comment'       => (new CommentController)->create(),
    'store-comment'        => (new CommentController)->store(),
    'delete-comment'       => (new CommentController)->delete(),

    //  CRUD Users
    'list-user'            => (new UserController)->index(),
    'create-user'          => (new UserController)->create(),
    'store-user'           => (new UserController)->store(),
    'delete-user'          => (new UserController)->delete(),
};