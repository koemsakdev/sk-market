<?php
// Database configuration
const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASS = "";
const DB_NAME = "sk-market";

function db()
{
    static $conn;
    if ($conn instanceof mysqli) {
        return $conn;
    }

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Database connection failed: {$conn->connect_error}");
    }

    if (!$conn->set_charset("utf8")) {
        die("Error loading character set utf8: {$conn->error}");
    }

    return $conn;
}

function fetchQuery($sql, $params = [], $types = "")
{
    $conn = db();
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: {$conn->error}");
    }

    if (!empty($params)) {
        $stmt->bind_param($types ?: str_repeat("s", count($params)), ...$params);
    }

    if (!$stmt->execute()) {
        die("Query failed: {$stmt->error}");
    }

    $result = $stmt->get_result();
    return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
}

function getProducts($limit = 4, $category = null)
{
    $sql = "SELECT * FROM products";
    $params = [];
    if ($category) {
        $sql .= " WHERE product_category = ?";
        $params[] = $category;
    }
    $sql .= " LIMIT ?";
    $params[] = $limit;

    return fetchQuery($sql, $params, str_repeat("s", count($params) - 1) . "i");
}
