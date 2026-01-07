<?php
include "../models/AboutBase.php";
class AboutController extends AboutBase
{
    private $task;

    public function __construct()
    {
        $this->task = new AboutBase();
    }

    //add about

    public function addAbout()
    {
        if (!isset($_POST['add_about'])) {
            return;
        }

        $file = isset($_FILES['image_url']) ? $_FILES['image_url'] : [];
        $where = [];

        if (array_key_exists('id', $_POST) && !empty($_POST['id'])) {
            $where[] = ['id' => $_POST['id']];
        }

        unset($_POST['id'], $_POST['add_about']);

        $this->task->About("about", $_POST, $where, $file);

        // Redirect after processing
        header("Location: ../views/about.php");
        exit();
    }


    public function get()
    {
        $aboutData = $this->task->getData("about");
        if (!empty($aboutData)) {
            $aboutData = current($aboutData);
        }
        return $aboutData;
    }

    //add subject
    public function addSubject()
    {
        if (!isset($_POST['add_subject'])) {
            return;
        }
        unset($_POST['add_subject']);
        $this->task->addCategories("subjects", $_POST);
        header("Location: ../views/notes.php");
        exit();
    }

    public function addClasses()
    {
        if (!isset($_POST['add_class'])) {
            return;
        }
        unset($_POST['add_class']);
        $this->task->addCategories("classrooms", $_POST);
        header("Location: ../views/notes.php");
        exit();
    }

    //get subjects
    public function getsubjects()
    {
        $subjects = $this->task->getCategories("subjects");
        return $subjects;
    }

    //get classes
    public function getClasses()
    {
        $classes = $this->task->getCategories("classrooms");
        return $classes;
    }

    //add notes
    public function addNote()
    {
        if (!isset($_POST['add_notes'])) {
            return;
        }

        $image = isset($_FILES['image_url']) ? $_FILES['image_url'] : [];
        $pdf = isset($_FILES['pdf']) ? $_FILES['pdf'] : [];

        unset($_POST['add_notes']);
        $this->task->addNotes("notes", $_POST, $image, $pdf);
        header("Location: ../views/notes.php");
        exit();
    }
}
