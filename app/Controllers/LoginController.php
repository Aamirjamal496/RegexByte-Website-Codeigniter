<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\LoginModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use CodeIgniter\Exceptions\AlertError;

use CodeIgniter\HTTP\Message;
use function PHPUnit\Framework\returnSelf;

class LoginController extends Controller
{
    public function read()
    {
        return view("readmore.php");
    }
    public function checkAdmin()
    {
        $request = service('request');
        $email = $request->getPost("admin_email");
        $password = $request->getPost("password");

        // Load the LoginModel
        $model = new LoginModel();
        $user = $model->getUser($email);

        if ($user) {
            // Verify the password
            if (password_verify($password, $user['Password'])) {
                // Authentication successful
                // Set session data or redirect as needed
                $session = service('session');
                $session->set('id', $user['id']);
                $session->set('email', $user['email']);
                return view('dashboard.php');
                // Redirect to a secure page after login
            } else {
                // Password is incorrect
                return redirect()->back()->with('error', 'Wrong Password');
            }
        } else {
            // No user found with this email
            return redirect()->back()->with('error', 'No user with this email');
        }
    }
    public function getContact()
    {
        $request = service("request");
        $first = $request->getPost('fname');
        $last = $request->getPost('lname');
        $email = $request->getPost('email');
        $Msg = $request->getPost('msg');
        $Data = [
            'firstName' => $first,
            'lastName' => $last,
            'email' => $email,
            'message' => $Msg
        ];
        $model = new LoginModel();
        $model->getContact($Data);
        return redirect()->to(base_url('/'));
    }
        public function downloadExcel()
    {
        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header information
        $sheet->setCellValue('A1', 'First Name');
        $sheet->setCellValue('B1', 'Last Name');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Message');
        $sheet->setCellValue('E1', 'Date/Time');

        // Apply bold font to the header of the excel
        $sheet->getStyle('A1:E1')->getFont()->setBold(true);

        // Fetch data from your model
        $model = new LoginModel(); // Adjust to your model name
        $data = $model->getExcel(); // Adjust to your model method

        // Populate spreadsheet with data
        $row = 2; // Starting row for data
        foreach ($data as $item) {
            $sheet->setCellValue('A' . $row, $item->firstName);
            $sheet->setCellValue('B' . $row, $item->lastName);
            $sheet->setCellValue('C' . $row, $item->email);
            $sheet->setCellValue('D' . $row, $item->message);
            $sheet->setCellValue('E' . $row, $item->current_timestamp);
            $row++;
        }

        // Set headers for download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="data.xlsx"');
        header('Cache-Control: max-age=0');

        // Write the file to the output
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit();
    }

    public function dashboard()
    {
        $session = service('session');
        $id = $session->get('id');
        if ($id) {
            return view('dashboard.php');
        } else {
            return view('index.php');
        }
    }

    public function categories()
    {
        $session = service('session');
        $sessionId = $session->get('id');
        if ($sessionId) {
            return view('Categories.php');
        } else {
            return view('SignIn.php');
        }
    }
    // Add Categories Logic:
    public function saveCat()
    {
        $request = service('request');
        $Name = $request->getPost('name');
        $Status = $request->getPost('status');
        $Description = $request->getPost('description');
        $AddCat = [
            'name' => $Name,
            'status' => $Status,
            'description' => $Description
        ];
        $model = new LoginModel();
        $added = $model->saveCat($AddCat);
        return redirect()->to(base_url('/category'));

    }
    // Get Categories Data from db
    public function getCat()
    {
        $session = service('session');
        $S_ID = $session->Get('id');
        if ($S_ID) {
            $model = new LoginModel();
            $data['Test'] = $model->getCatData();
            return view('Categories.php', $data);
        } else {
            return redirect()->to(base_url('SignIn'));
        }
    }
    public function deleteCat($id)
    {
        // print_r($id);
        // die();
        $model = new LoginModel();
        $delete = $model->delCat($id);
        if ($delete) {
            return redirect()->to(base_url('/category'));
        } else {
            echo ('Failed to delete a category');
        }
    }

    public function UpdateCategory()
    {
        $request = service('request');
        $id = $request->getPost('id');
        $name = $request->getPost('name');
        $status = $request->getPost('status');
        $desc = $request->getPost('description');

        $CData = [
            'name' => $name,
            'status' => $status,
            'description' => $desc,
        ];
        $model = new LoginModel();
        $model->updateCategory($id, $CData);
        return redirect()->to(base_url('/category'));
        // $cupdate = $model->updateCategory($id, $CData);
        // if($cupdate)
        // {
        //     // echo('updated');
        //     return redirect()->to(base_url('categories'));
        // }else{
        //     echo'failed to update a category';
        // }
    }

    // Slider functions:

    public function saveSlider()
    {
        $request = service('request');
        $image = $request->GetFile('img');
        $saveimage = $image->getName();
        $image->move(FCPATH . 'uploads', $saveimage);
        $Id = $request->getPost('id');
        $Title = $request->getPost('title');
        $Status = $request->getPost('status');
        $Desc = $request->getPost('description');
        $SData = [
            'profile' => $saveimage,
            'id' => $Id,
            'title' => $Title,
            'status' => $Status,
            'description' => $Desc,
        ];
        $model = new LoginModel();
        $AddSlider = $model->saveSlide($SData);
        if ($AddSlider) {
            return redirect()->to(base_url('slider'));
        }

    }
    // Slider show oon display function:

    public function getSlidehome()
    {
        $model = new LoginModel();
        $data['slider'] = $model->getSlider();

        $data['review'] = $model->getReview();
        $data['blogs'] = $model->getBlog();
        return view('index.php', $data);

    }
    public function getSliderdash()
    {
        $session = service('session');
        $S_ID = $session->Get('id');
        if ($S_ID) {
            $model = new LoginModel();
            $data['slider'] = $model->getSlider();

            return view('Slider.php', $data);
        } else {
            return redirect()->to(base_url('/'));
        }

    }

    // Update Slider:
    // New Method to update slider:
    public function UpdateSlider()
    {

        // Created from old code categories:
        $request = service('request');
        $id = $request->getPost('id');
        // // Handle image upload
        $image = $request->getFile('img');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $profile = $image->getName();
            $image->move(FCPATH . 'uploads', $profile);
            $SData['profile'] = $profile; // Update profile if a new image is uploaded
        } else {
            // Keep the existing profile image if no new image is uploaded
            $SData['profile'] = $existingSlide['profile'] ?? null; // Use null if not set
        }
        $title = $request->getPost('title');
        $status = $request->getPost('status');
        $desc = $request->getPost('description');

        $SData = [
            'title' => $title,
            // 'profile'=>$profile,
            'status' => $status,
            'description' => $desc,
        ];
        $model = new LoginModel();
        $model->updateSlider($id, $SData);
        return redirect()->to(base_url('/slider'));
    }

    // delete Slide:
    public function deleteSlide($id)
    {
        // print_r($id);
        // die();
        $model = new LoginModel();
        $delete = $model->delslide($id);
        return redirect()->to(base_url('slider'));
    }

    // Projects Function:
    public function getPr()
    {
        return view('projects.php');
    }
    // public function saveProject()
    // {
    //     // chatgpt code:
    // $request = service('request');
    // $title = $request->getPost('title');
    // $category = $request->getPost('category');
    // $description = $request->getPost('description');
    // $images = $request->getFiles();

    // // Array to store uploaded file names
    // $uploadedImages = [];

    // if ($images) {
    //     foreach ($images['images'] as $img) {
    //         if ($img->isValid() && !$img->hasMoved()) {
    //             $newName = $img->getRandomName();
    //             $img->move(WRITEPATH . 'uploads', $newName);
    //             $uploadedImages[] = $newName;
    //         }
    //     }
    // }

    // // Store the data in the database
    // $data = [
    //     'projectTitle' => $title,
    //     'idCategory' => $category,
    //     'projectDescription' => $description,
    //     'images' => json_encode($uploadedImages), 
    // ];

    // // $db = \Config\Database::connect();
    // // $builder = $db->table('projects');
    // // $builder->insert($data);
    // $model = new LoginModel();
    // $model->savePr($data);

    // return redirect()->to(base_url('/projects'));

    //     // end
    //     // $request = service('request');
    //     // $image = $request->GetFile('img');
    //     // $saveimg = $image->getName();
    //     // $image->move(FCPATH . 'uploads', $saveimg);
    //     // $title = $request->getPost('title');
    //     // $category = $request->getPost('category');
    //     // $desc = $request->getPost('description');

    //     // $PData = [

    //     //     'projectTitle' => $title,
    //     //     'idCategory' => $category,
    //     //     'projectDescription' => $desc,
    //     // ];

    //     // $model = new LoginModel();
    //     // $projectId = $model->savePr($PData);

    //     // $imagedata = [
    //     //     'image' => $saveimg,
    //     //     'idProject' => $projectId
    //     // ];

    //     // $model->saveImage($imagedata);
    //     // return redirect()->to(base_url("/projects"));
    // }
    // public function getCatD()
    // {
    //     $model = new LoginModel();
    //     $data['cat']=$model->getCatData();
    //     return view('projects.php',$data);
    // }

    public function getCategories()
    {
        // Get Category data for dropdown
        $model = new LoginModel();
        $data['cat'] = $model->getCatData();
        // Get projects and images :
        $data['projects'] = $model->getCombinedData();
        // $test = $model->getCombinedData();
        // print_r($test);
        return view('projects.php', $data);
    }
    // getProjects without category selection:
    // public function getPrHome()
    // {
    //     // Get Category data for dropdown
    //     $model = new LoginModel();
    //     $data['cat'] = $model->getCatData();
    //     // Get projects and images :
    //     $data['projects'] = $model->getCombinedData();
    //     // $test = $model->getCombinedData();
    //     // print_r($test);
    //     return view('portfolio.php', $data);
    // }


    // GetProjects by category:

    public function getPrHome()
    {
        // Get Category data for dropdown
        $model = new LoginModel();
        $data['cat'] = $model->getCatData();

        // Check if a category is selected
        $categoryId = $this->request->getVar('category');

        if ($categoryId && $categoryId != 'default') {
            // If category is selected, filter projects by category
            $data['projects'] = $model->getProjectsByCategory($categoryId);
        } else {
            // If no category is selected, fetch all projects
            $data['projects'] = $model->getCombinedData();
        }

        return view('portfolio.php', $data);
        // return redirect()->to(base_url('portfolio', $data));
    }
    // End
    // public function deleteProject($id)
    // {
    //     $model = new LoginModel();
    //     $model->delProject($id);
    //     return redirect()->to(base_url('/projects'));
    // }

    public function deleteProject($id)
    {
        $model = new LoginModel();

        // First, delete the related images
        $model->deleteImagesByProjectId($id);

        // Then delete the project itself
        $model->delProject($id);

        return redirect()->to(base_url("/projects"))->with('success', 'Project deleted successfully');
    }
    // Messages Routes:
    public function message()
    {
        $pager = service('pager');
        $session =service('session');
        $S_Id = session('id');
        if($S_Id){
            $model = new LoginModel();
            $currentPage = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
            $perPage = 20;
            $offset = ($currentPage - 1) * $perPage;
            $data['message'] = $model->showContact($perPage, $offset);
            $data['pager'] = $model->getPager($perPage, $currentPage);
            // print_r($msg);
            // die();
            return view('Message.php', $data);
        }else{
            return redirect()->to(base_url('/'));
        }
    }
    public function delMsg($id)
    {
        $model = new LoginModel();
        $model->delContact($id);
        return redirect()->to(base_url('Message'));
    }
    // Portfolio
    public function portfolio()
    {
        return view('portfolio.php');
    }
    public function details($id)
    {
        $model = new LoginModel();
        $data['project'] = $model->portfolioDetails($id);
        // $data['project']=$model->connectCat($id);
        // $test =$model->portfolioDetails($id);

        // print_r($test);
        // die();
        return view('portfolio_details.php', $data);
    }
    // Logout:

    public function logout()
    {
        $session = service('session');
        $session->destroy();
        return redirect()->to(base_url('/'));
    }


    public function saveProject()
    {
        $model = new LoginModel();

        $data = [
            'idCategory' => $this->request->getPost('category'),
            'projectTitle' => $this->request->getPost('title'),
            'projectDescription' => $this->request->getPost('description'),
        ];

        $projectId = $model->insertProject($data);
        $images = $this->request->getFiles();

        if ($images && isset($images['images'])) {
            foreach ($images['images'] as $img) {
                if ($img->isValid() && !$img->hasMoved()) {
                    $imgName = $img->getRandomName();
                    $img->move(FCPATH . 'uploads', $imgName);

                    $imageData = [
                        'idProject' => $projectId,
                        'image' => $imgName,
                    ];
                    $model->insertImage($imageData);
                }
            }
        }
        // print_r($imageData);
        // die();

        return redirect()->to(base_url("/projects"));
    }
    public function Review()
    {
        $request = service('request');
        $Name = $request->getPost('name');
        $review = $request->getPost('review');
        $review = [
            'user' => $Name,
            'review' => $review,
        ];
        $model = new LoginModel();
        $add = $model->review($review);
        if ($add) {
            return redirect()->to(base_url('/'));
        } else {
            return redirect()->with("message", "Failed");
        }
    }
    public function getReview()
    {
        $session = service('session');
        $pager = service('pager');
        $S_ID = $session->Get('id');
        if ($S_ID) {
            $model = new LoginModel();
            $currentPage = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
            $perPage = 20;
            $offset = ($currentPage - 1) * $perPage;
            $data['review'] = $model->getReview($perPage, $offset);
            $data['pager'] = $model->getPager($perPage, $currentPage);
            // $data['review'] = $model->getReview();
            return view('Reviews.php', $data);
        }else {
            return redirect()->to(base_url('/'));
        }
        // return view('Reviews.php');
    }
    public function delReview($id)
    {
        $model = new LoginModel();
        $model->deleteReview($id);
        return redirect()->to(base_url("/reviews"));
    }

    // public function getReviewHome()
    // { 
    // We have  getted the slider and reviews on same page that's why the code is with getSlideHome();
    // }


    // Blogs

    public function addBlogs()
    {
        $request = service('request');
        $session = service('session');
        $Adm_Id = $session->Get('id');
        $image = $request->GetFile('images');
        $saveimage = $image->getName();
        $image->move(FCPATH . 'uploads', $saveimage);
        $title = $request->getPost('title');
        $description = $request->getPost('description');

        $blog = [
            'image' => $saveimage,
            'user_id' => $Adm_Id,
            'title' => $title,
            'description' => $description,
        ];
        $model = new LoginModel();
        $model->addBlog($blog);
        return redirect()->to(base_url('blogs'));
    }
    public function getBlogs()
    {
        $session = service('session');
        $S_ID = $session->get('id');
        if ($S_ID) {
            $model = new LoginModel();
            $data['blogs'] = $model->getBlog();
            return view('Blogs.php', $data);
        } else {
            return redirect()->to(base_url('/'));
        }
    }
    public function blogdetails($id)
    {
        $model = new LoginModel();
        $data['details'] = $model->bldetails($id);

        // print_r($data['details']);
        // die();
        if (empty($data['details'])) {
            return "No data found"; // Handle the case when no data is found
        }

        return view('blog_details', $data); // Removed .php from view name
    }

    public function editBlog()
    {
        $request = service('request');
        $id = $request->getPost('id');
        // Image code
        $image = $request->getFile('image');
        // Check image is valid or not 
        if($image && $image->isValid() && !$image->hasMoved()) {
        $profile = $image->getName();
        $image->move(FCPATH . 'uploads', $profile);
        $BData['image'] = $profile;
        }else{
            $BData['image'] = $existingSlide['image'] ?? null;
        }
        $title = $request->getPost('title');
        $description = $request->getPost('description');
        $BData = [
            // 'image' => $profile,
            'title' => $title,
            'description' => $description,
        ];
        $model = new LoginModel();
        $update = $model->UpdateBlog($id, $BData);
        // print_r($BData);
        // die();
        if ($update) {
            return redirect()->to(base_url('blogs'));
        } else {
            print_r('Failed to update');
        }
    }
    public function deleteBlog($id)
    {
        $model = new LoginModel();
        $model->deleteBlog($id);
        return redirect()->to(base_url('blogs'));
    }


}
