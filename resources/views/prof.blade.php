@extends('layout')

@section('content')
    <main class="mt-5 mb-5">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card bg-light">
                            <div class="card-title">
                                <h2>Hackerone</h2>
                            </div>
                            <div><img class="img-fluid" src="img/Hackerone.jpg" alt="hackerone-logo" width="600" height="300" />
                            </div><br>
                            <p>Hackerone is a company with an informal idea in a formal disguise, namely: Hackerone hires hackers to
                                penetrate customers' systems to discover bugs and weaknesses. For every weakness the hacker discovers,
                                he/she receives money from Hackerone.</p>
                            <p>
                                At the end, the customer has a list of what needs to be improved about the security of their system.
                                The customer then pays Hackerone for its services.
                            </p>

                            Functions:
                            <ul>
                                <li>Product manager: ensures that the project lead is on par with the business direction and has the
                                    information they need.</li>
                                <li>Product designer: works with product manager and project lead to create all necessary UI and UX
                                    designs.</li>
                                <li> Project leader: helps determine the scope of the project, makes sure other squad engineers are on
                                    one line with the project.</li>
                            </ul>
                            <br>
                            Hackerone works with the following programs:
                            <ul>
                                <li>Gitlab for the software development life cycle</li>
                                <li>GraphQI as search language for data</li>
                                <li>Ruby on rails as opensource web application framework</li>
                                <li>Rspec as BDD-framework for Ruby</li>
                                <li>Cucumber as software tool for the behavior-driven development</li>
                                <li>Postgres as free relational database server</li>
                                <li>Redis as in-memory data structure archive</li>
                                <br>
                            </ul>
                        </div>
                    </div>
                </div>
    </main>
@endsection
