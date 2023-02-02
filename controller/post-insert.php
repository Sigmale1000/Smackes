<?php
session_start();
require 'db.php';




$title = $_REQUEST['title'];
$content = $_REQUEST['content'];
$userid = $_SESSION['id'];

$stmt = $conn->prepare('INSERT INTO blogs (title, content, userid) VALUES(?, ?, ?)');
$stmt->bind_param('ssi', $title, $content, $userid); // 's' specifies the variable type => 'string'
$stmt->execute();

