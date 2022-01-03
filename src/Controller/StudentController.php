<?php

namespace App\Controller;

use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{

    private StudentRepository $studentRepository;

    /**
     * @param StudentRepository $studentRepository
     */
    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    /**
     * @Route("/students", name="students_index")
     */
    public function index(): Response
    {
        dump($this->studentRepository->findAllStudents());
        return $this->render('student/index.html.twig', [
            // revient à faire un SELECT * FROM student
            'students' => $this->studentRepository->findAllStudents(),
        ]);
    }
}
