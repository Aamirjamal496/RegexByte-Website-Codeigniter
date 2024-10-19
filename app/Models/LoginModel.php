<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'user-table';
    protected $primaryKey = "id";
    protected $allowedFields =
        ['firstname', 'lastname', 'email', 'phone', 'Password', 'image', 'status', 'created-at'];

    // Contact us Models:
    public function getContact($Data)
    {
        return $this->db->table('contact_us')->insert($Data);
    }
    public function showContact($perPage = 20, $offset = 0)
    {
       $builder= $this->db->table('contact_us');
        $builder->limit($perPage, $offset);

        $query = $builder->get();
        return $query->getResultArray();
    }
    public function getExcel()
    {
        $builder = $this->db->table('contact_us')->select('firstName,lastName,email,message,`current-timestamp` AS current_timestamp');
        return $builder->get()->getResult();
        
    }
    public function getPager($perPage = 20, $currentPage = 1)
    {
        $builder = $this->db->table('contact_us');
        $builder->select('COUNT(*) as total');

        $totalQuery = $builder->get();
        $totalResult = $totalQuery->getRowArray();
        $total = isset($totalResult['total']) ? (int) $totalResult['total'] : 0;

        $pager = service('pager');
        $pagerLinks = $pager->makeLinks($currentPage, $perPage, $total, 'default_full');

        return $pagerLinks;

    }
    
    // End
    public function delContact($id)
    {
        $this->db->table('contact_us')->where('columns_id', $id)->delete();
    }
    // Contact us Models End;


    public function savedata($Data)
    {
        $this->insert($Data);
        return $this->insertID();
    }
    public function getUser($email)
    {
        return $this->where('email', $email)->first();
    }
    public function saveCat($AddCat)
    {
        $this->db->table('categories')->insert($AddCat);
        // return $this->insertID();
    }
    // display category
    public function getCatData()
    {
        return $this->db->table('categories')
            ->get()
            ->getResultArray();
        // return $query->result_array();
    }
    // Delete category
    public function delCat($id)
    {
        return $this->db->table('categories')->where('id', $id)->delete();
        // return $this->db->delete('categories');
    }
    // Update category
    public function updateCategory($id, $CData)
    {
        return $this->db->table('categories')->where('id', $id)->update($CData);
    }

    // Save slider data in DB
    public function saveSlide($SData)
    {
        return $this->db->table('slider')->insert($SData);
    }
    // Display slider data on page:
    public function getSlider()
    {
        return $this->db->table('slider')
            ->get()
            ->getResultArray();
    }
    public function updateSlider($id, $SData)
    {
        return $this->db->table('slider')->where('id', $id)->update($SData);
    }
    public function getSliderById($id)
    {
        $slide = $this->table('slider')->where('id', $id)->first();
        if (!$slide) {
            throw new \RuntimeException('Slide not found.');
        }
        return $slide;
    }
    public function delslide($id)
    {
        return $this->db->table('slider')->where('id', $id)->delete();
    }

    public function saveImage($imagedata)
    {
        return $this->db->table('images')->insert($imagedata);
    }

    // Project Models
    public function savePr($data)
    {
        $this->db->table('projects')->insert($data);
        return $this->db->insertID();
    }
    // GetProjects by category:
    public function getProjectsByCategory($categoryId)
    {
        return $this->db->table('projects')
            ->select('projects.*, GROUP_CONCAT(images.image) as images')
            ->join('images', 'images.idProject = projects.id', 'left')
            ->where('projects.idCategory', $categoryId) // Filter by category
            ->groupBy('projects.id')
            ->get()
            ->getResultArray();
    }

    public function getCombinedData()
    {
        return $this->db->table('projects')
            ->select('projects.*, GROUP_CONCAT(images.image) as images')
            ->join('images', 'images.idProject = projects.id', 'left')
            ->groupBy('projects.id')
            ->get()
            ->getResultArray();
    }

    public function delProject($id)
    {
        return $this->db->table('projects')->where('id', $id)->delete();
    }
    public function deleteImagesByProjectId($projectId)
    {
        // Assuming you have a table for images related to projects
        // Adjust the query according to your database structure
        $this->db->table('images') // Change to your images table
            ->where('idProject', $projectId)
            ->delete();
    }
    public function portfolioDetails($id)
    {
        // Get project details with category information
        $project = $this->db->table('projects')
            ->select('projects.*, categories.name as category_name, categories.description as category_description')
            ->join('categories', 'projects.idCategory = categories.id', 'left')
            ->where('projects.id', $id)
            ->get()
            ->getRowArray();

        // Get project images
        $images = $this->db->table('images')
            ->select('image')
            ->where('idProject', $id)
            ->get()
            ->getResultArray();

        // Combine project details and images into one array
        $project['images'] = array_column($images, 'image'); // Convert images result to a simple array

        return $project;
    }


    public function insertProject($data)
    {
        $this->db->table('projects')->insert($data);
        return $this->db->insertID();
    }

    public function insertImage($data)
    {
        $this->db->table('images')->insert($data);
    }

    // reveiws Model functions
    public function review($review)
    {
        return $this->db->table('user_review')->insert($review);
        // $builder= $this->db->table('user_review');
        // $builder->limit($perPage, $offset);

        // $query = $builder->get();
        // return $query->getResultArray();
    }
    public function getReview($perPage =20, $offset=0)
    {
        $builder = $this->db->table('user_review');
        $builder->limit($perPage, $offset);
        $query=$builder->get();
        return $query->getResultArray();
        // return $this->db->table('user_review')->get()->getResultArray();
    }
    public function deleteReview($id)
    {
        return $this->db->table('user_review')->where('id', $id)->delete();
    }
    // Add blogs
    public function addBlog($data){
       return  $this->db->table('blogs')->insert($data);
    }
    public function getBlog()
    {
        return $this->db->table('blogs')->get()->getResultArray();
    }
    public function bldetails($id)
    {
       return $this->db->table('blogs')
            ->where('id', $id)
            ->get()
            ->getResultArray();
    }
    public function UpdateBlog($id, $data){
        return $this->db->table('blogs')->where('id', $id)->update($data);
    }
    public function deleteBlog($id)
    {
        return $this->db->table('blogs')->where('id' , $id)->delete();
    }
}
