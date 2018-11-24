@extends('layout')

@section('content')
<link rel="stylesheet" href="/css/style.css">
    <div class="jumbotron" style="background-color:#fff">

        <main>
            <section id="section-b" class="grid">
                        <ul>
                            <li>
                                <div class="card">
                                    <img src="https://images.pexels.com/photos/574077/pexels-photo-574077.jpeg?cs=srgb&dl=code-coding-computer-574077.jpg&fm=jpg" alt="">
                                    <div class="card-content">
                                        <a href="/feed">
                                            <h3 class="card-title">Your tailored list</h3>
                                        </a>Check out these latest jobs we found just for you!</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <img src="https://images.pexels.com/photos/261628/pexels-photo-261628.jpeg?cs=srgb&dl=access-adult-blur-261628.jpg&fm=jpg" alt="">
                                    <div class="card-content">
                                        <a href="favorites">
                                        <h3 class="card-title">My Favorites</h3>
                                        </a>
                                        <p>Some of your favorite job prospects, saved just for you!</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <img src="https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?cs=srgb&dl=business-charts-commerce-265087.jpg&fm=jpg" alt="">
                                    <div class="card-content">
                                        <a href="meetup">
                                        <h3 class="card-title">Networking groups in your field!</h3>
                                        </a>
                                        <p>Get out and rub shoulders with people in your industry! These are your
                                            local technology networking meet-up events.
                                </div>
                            </li>
                        </ul>
                    </section>

        </main>

    </div>



@endsection
