<?php
class Product {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll($page = 1, $perPage = 10) {
        $offset = ($page - 1) * $perPage;
        $stmt = $this->db->prepare('SELECT * FROM products LIMIT :limit OFFSET :offset');
        $stmt->bindValue(':limit', $perPage, SQLITE3_INTEGER);
        $stmt->bindValue(':offset', $offset, SQLITE3_INTEGER);
        $result = $stmt->execute();
        
        $products = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $products[] = $row;
        }
        return $products;
    }

    public function create($data) {
        $stmt = $this->db->prepare('INSERT INTO products (name, description, price, category) VALUES (:name, :description, :price, :category)');
        $stmt->bindValue(':name', $data['name'], SQLITE3_TEXT);
        $stmt->bindValue(':description', $data['description'], SQLITE3_TEXT);
        $stmt->bindValue(':price', $data['price'], SQLITE3_FLOAT);
        $stmt->bindValue(':category', $data['category'], SQLITE3_TEXT);
        return $stmt->execute();
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare('UPDATE products SET name = :name, description = :description, price = :price, category = :category WHERE id = :id');
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        $stmt->bindValue(':name', $data['name'], SQLITE3_TEXT);
        $stmt->bindValue(':description', $data['description'], SQLITE3_TEXT);
        $stmt->bindValue(':price', $data['price'], SQLITE3_FLOAT);
        $stmt->bindValue(':category', $data['category'], SQLITE3_TEXT);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare('DELETE FROM products WHERE id = :id');
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        return $stmt->execute();
    }

    public function getById($id) {
        $stmt = $this->db->prepare('SELECT * FROM products WHERE id = :id');
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        $result = $stmt->execute();
        return $result->fetchArray(SQLITE3_ASSOC);
    }

    public function getTotalCount() {
        $result = $this->db->query('SELECT COUNT(*) as count FROM products');
        $row = $result->fetchArray(SQLITE3_ASSOC);
        return $row['count'];
    }
}