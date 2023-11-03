@extends('layouts.app')

@section('page-title', 'Home')


@section('content')
    <section id="welcome">
        <div class="container">
            <div class="row align-items-md-stretch py-5">
                <div class="col">
                    <div class="h-100 p-5 text-white bg-primary border rounded-3">
                        <h2>Welcome</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt similique dolorum natus
                            temporibus consequuntur at reiciendis eum, vitae praesentium iste! Neque sed, doloribus nemo
                            omnis enim illo culpa praesentium! Quibusdam, alias sunt deleniti nihil quae, exercitationem
                            architecto nulla labore molestias pariatur maiores quidem sit vel debitis quis. Sunt impedit
                            obcaecati quo fuga eaque. Dignissimos porro esse accusantium, laborum quod autem. Omnis dolor
                            mollitia in, pariatur vel totam aperiam perspiciatis cumque assumenda dolorem blanditiis
                            eligendi culpa, molestiae tempore facilis temporibus ipsa sunt ut delectus! Omnis recusandae
                            quasi veniam neque odit ex minus quas aperiam quos asperiores voluptatem facilis, eaque tempore
                            facere!
                        </p>
                        <a href="{{ route('comics') }}" class="btn btn-warning btn-outline-light" type="button">See Comics</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
