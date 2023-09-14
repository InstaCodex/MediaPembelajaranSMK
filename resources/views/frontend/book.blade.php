@extends('layouts.frontend')
@section('content')
    <title>dwii</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            /* Rata tengah secara horizontal */
            align-items: center;
            /* Rata tengah secara vertikal */
            height: 100vh;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            margin: 80px;
            align-items: center;
            grid-gap: 30px;
        }

        img {
            object-fit: cover;
        }

        .grid>article {
            box-shadow: 10px 5px 5px 2cap black;
            border-radius: 20px;
            text-align: center;
            background: whitesmoke;
            width: 300px;
            transition: transform;
        }

        .grid>article img {
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }

        .grid>article:hover {
            transform: scale(1.04);
            transition: all .5s ease-in-out;
            cursor: pointer;
        }

        @media (max-width:1000px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width:800px) {
            .grid {
                grid-template-columns: repeat(1, 1fr);
            }
        }
    </style>
    <div class="container">
        <main class="grid">
            <article>
                <a href="./test.html" style="text-decoration: none; color: inherit;">
                    <img src="makanan.jpeg" width="300px" height="300px">
                    <div class="konten">
                        <h2>APPETIZER</h2>
                        <p>Merupakan hidangan pembuka</p>
                    </div>
                </a>
            </article>
            <article>
                <a href="./test.html" style="text-decoration: none; color: inherit;">
                    <img src="makanan.jpeg" width="300px" height="300px">
                    <div class="konten">
                        <h2>APPETIZER</h2>
                        <p>Merupakan hidangan pembuka</p>
                    </div>
                </a>
            </article>
            <article>
                <a href="./test.html" style="text-decoration: none; color: inherit;">
                    <img src="makanan.jpeg" width="300px" height="300px">
                    <div class="konten">
                        <h2>APPETIZER</h2>
                        <p>Merupakan hidangan pembuka</p>
                    </div>
                </a>
            </article>
            <article>
                <a href="./test.html" style="text-decoration: none; color: inherit;">
                    <img src="makanan.jpeg" width="300px" height="300px">
                    <div class="konten">
                        <h2>APPETIZER</h2>
                        <p>Merupakan hidangan pembuka</p>
                    </div>
                </a>
            </article>
        </main>
    </div>
@endsection
