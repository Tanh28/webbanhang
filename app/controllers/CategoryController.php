<?php
// Require SessionHelper and other necessary files
require_once('app/config/database.php');
require_once('app/models/CategoryModel.php');
class CategoryController
{
    private $categoryModel;
    private $db;
    public function __construct()
    {
        $this->db = (new Database())->getConnection();
        $this->categoryModel = new CategoryModel($this->db);
    }
    public function list()
    {
        $categories = $this->categoryModel->getCategories();
        include 'app/views/categories/list.php';
    }
    public function edit($id)
    {
        $category = $this->categoryModel->getCategoryById($id);
        if (!$category) {
            die('Không tìm thấy danh mục');
        }
        include 'app/views/categories/edit.php';
    }

    public function delete($id)
    {
        if ($this->categoryModel->deleteCategory($id)) {
            header('Location: /webbanhang/Category/list');
            exit;
        } else {
            die('Xóa không thành công');
        }
    }
    public function add()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'] ?? '';
        $description = $_POST['description'] ?? '';

        $result = $this->categoryModel->addCategory($name, $description);

        if ($result === true) {
            header('Location: /webbanhang/Category/list');
            exit;
        } else {
            $errors = $result;
            include 'app/views/categories/add.php';
        }
    } else {
        include 'app/views/categories/add.php';
    }
}
public function update()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'] ?? null;
        $name = $_POST['name'] ?? '';
        $description = $_POST['description'] ?? '';

        if (!$id) {
            die('ID danh mục không hợp lệ');
        }

        $result = $this->categoryModel->updateCategory($id, $name, $description);

        if ($result === true) {
            header('Location: /webbanhang/Category/list');
            exit;
        } else {
            $errors = $result;
            // Lấy lại dữ liệu danh mục để hiển thị form edit với lỗi
            $category = $this->categoryModel->getCategoryById($id);
            include 'app/views/categories/edit.php';
        }
    } else {
        die('Phương thức không hợp lệ');
    }
}

}
