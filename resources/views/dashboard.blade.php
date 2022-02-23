@extends('layout')

@section('content')
    <main class="mt-5">
        <!-- Page Title -->
        <div class="mb-5 align-items-center">
            <div class="container-fluid py-5">
                <h1 class="display-1 fw-bolder text-center">My Study Monitor</h1>
            </div>
        </div>
        <!-- Page Title -->
        <div class="container">
            <!-- Progress bar -->
            <h4>NBSA:</h4>
            <div class="progress" data-label="0%" style="--width: 0"></div>
            <!-- /Progress bar -->
            <div class="table-responsive table-bordered mt-5 rounded">
                <table class="table table-hover dashboard-table table-dark ">
                    <thead>
                    <tr>
                        <th scope="col">Quartile</th>
                        <th scope="col">Courses</th>
                        <th scope="col">EC</th>
                        <th scope="col">Exam</th>
                        <th scope="col">Grade</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td rowspan="3" rows>1</td>
                        <td>Programme and Career Orientation</td>
                        <td>2.5</td>
                        <td>Assesment</td>
                        <td>8.6</td>
                    </tr>

                    <tr>
                        <td>Computer Science Basics</td>
                        <td>5</td>
                        <td>Written Exam</td>
                        <td>7.0</td>
                    </tr>

                    <tr>
                        <td>Programming Basics</td>
                        <td>5</td>
                        <td>Case Study Exam</td>
                        <td>9.0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Object Oriented Programming</td>
                        <td>10</td>
                        <td>Case Study & Project</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td rowspan="2">3</td>
                        <td>Framework Development 1</td>
                        <td>5</td>
                        <td>Case Study</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Framework Project 1</td>
                        <td>7.5</td>
                        <td>Project, Assesment & Report</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Framework Project 2</td>
                        <td>10</td>
                        <td>Portofolio, Project & Assesment</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Entire Year</td>
                        <td>Personal Professional Development</td>
                        <td>12.5</td>
                        <td>Portofolio</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td>Whenever</td>
                        <td>Personality 1</td>
                        <td>1.25</td>
                        <td>Portofolio</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Whenever</td>
                        <td>Personality 2</td>
                        <td>1.25</td>
                        <td>Portofolio</td>
                        <td>-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
