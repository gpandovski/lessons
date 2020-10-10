<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita sint eligendi commodi delectus deserunt. Esse dolore laborum, quos culpa repellat eligendi voluptates eos vero natus magnam quibusdam maxime tempora provident saepe illo modi atque autem repellendus consequatur nihil beatae, perferendis quisquam. Deserunt aspernatur dolorum doloremque asperiores nemo incidunt, adipisci nostrum quod sint ea earum atque dolor est natus omnis, iure, odio magni inventore suscipit consequuntur ipsam dolores? Deserunt nemo dignissimos temporibus iure repudiandae eveniet odio, ab asperiores veniam qui reprehenderit ratione praesentium minima hic numquam aperiam unde ut libero veritatis velit, perspiciatis ullam similique et. Possimus fugit quasi molestias velit vitae dignissimos, culpa quam cum minima rem cupiditate beatae quod tenetur eligendi, esse ratione quibusdam error quae autem dolore debitis unde? Officiis aliquam odio ad repellat fugit atque rem magnam aspernatur laboriosam dolores molestias error voluptatibus dolorum ex possimus repudiandae maxime cumque inventore iste ullam, incidunt itaque esse exercitationem. Quia dolorum quisquam possimus facilis exercitationem, voluptas, libero, at eum numquam sapiente debitis ex neque ea provident vel. In nobis distinctio nam quasi, soluta perspiciatis exercitationem, voluptates dolorum nihil neque itaque eveniet obcaecati assumenda qui, quibusdam rerum. Maxime similique libero, aliquid quia suscipit quaerat eum dolorum repudiandae neque quasi, voluptate pariatur dolore expedita perferendis vel sed distinctio cupiditate at explicabo, dignissimos id ullam ipsam eos! Totam maiores exercitationem, velit quaerat aut distinctio aspernatur, dolore in impedit harum dolorum et ipsa sint quam ipsam quia? Ex explicabo numquam suscipit est ipsam ratione non quae facere eaque voluptatum velit maiores, veniam quod esse officia error sit harum corrupti dicta necessitatibus beatae dolores aspernatur unde! Tempora dicta recusandae minima, incidunt veniam nulla nobis ad, delectus pariatur accusamus quaerat itaque aperiam cumque dolorem, explicabo soluta ducimus quos. Numquam earum nam pariatur optio cumque quibusdam vitae molestiae iusto porro veniam, consequatur odit enim totam deserunt, laborum expedita cupiditate illo saepe explicabo odio, necessitatibus tempore maxime aliquid nihil. Quos sequi fuga aliquid nam! Possimus vel, magni id, unde similique impedit suscipit pariatur, doloremque molestias totam aliquam ipsam iste enim! A, eligendi sit ratione non rerum vel veritatis provident. Ex, explicabo praesentium quasi porro amet nulla sint labore beatae architecto dolores fugit repellat neque, eos sed iure exercitationem in quos maiores accusantium sapiente ea repudiandae incidunt? Et laboriosam unde placeat. Vitae, expedita harum nam animi iusto omnis tenetur aliquam. Officia expedita non fugit incidunt dolorum tempora suscipit quae architecto sunt excepturi, animi sit fuga cum itaque voluptate tenetur modi obcaecati reprehenderit? Officia rerum, consequuntur ex quo libero accusamus eos facere. Laudantium accusantium eos voluptatibus unde deleniti vero ullam rem alias quas veritatis, fugiat commodi inventore tempora? Libero eius soluta labore perspiciatis alias, fugit dicta sed culpa debitis nostrum illum non consequuntur id enim explicabo deserunt provident neque accusantium laboriosam obcaecati accusamus vitae quidem! Ad sunt quae, dolorum eligendi quas provident nemo magnam neque ducimus quos corporis obcaecati sed praesentium maxime numquam, quia et enim. Doloribus, beatae deleniti facilis eos necessitatibus maiores voluptatum accusamus vel, labore laudantium, quaerat illum atque repellendus sit dicta numquam voluptatem eius ea natus rem aliquid eligendi cum? Praesentium aperiam quas rem quae expedita repellendus, doloremque molestiae ullam eaque blanditiis quam suscipit libero ad optio? Sed pariatur reiciendis eaque. Dolor, quos laborum! Molestiae sunt nemo voluptates. Reiciendis est velit, impedit ea nulla omnis nesciunt similique eius quibusdam. Ad veritatis nisi hic repudiandae sed aperiam similique sequi corporis nostrum necessitatibus, adipisci consequuntur in dolorum, nemo incidunt suscipit aut quisquam ullam eligendi, molestiae doloribus modi quae. Possimus autem amet reiciendis accusamus minus. Accusamus, doloremque sint. Sed alias repudiandae illo, porro recusandae eum corrupti at esse, assumenda, voluptates quam maxime voluptatum debitis? Voluptatibus, eligendi? Ducimus iste quo esse omnis eveniet iure placeat quisquam dolorem facere id cumque quae quos non, odit in temporibus cupiditate maiores sequi consequuntur ipsum laudantium mollitia optio eligendi aut. Sed nihil dolor fugiat sunt repudiandae, libero, fuga omnis quas animi ipsum voluptate suscipit odit doloremque ducimus repellat? Provident totam impedit explicabo. Quibusdam, obcaecati? Soluta debitis provident ratione cum exercitationem suscipit iusto error praesentium cumque laboriosam illo quasi, odio eos ullam enim distinctio, ex delectus porro quae! Nesciunt reiciendis quod aut consectetur voluptatum? Animi et vitae veniam officia distinctio. Voluptate nulla molestias, natus nihil itaque atque at expedita iure ipsum reprehenderit enim perferendis, eaque assumenda nesciunt tenetur soluta veniam asperiores odit! Dolorem nemo earum asperiores fuga sed. Dolor fuga ratione libero assumenda sequi illo alias ipsum magni illum, unde non eveniet similique. Dolorem odio ipsa corrupti, ut possimus quos dolore architecto fugit reiciendis. Quas minima officia magnam sapiente, recusandae possimus reprehenderit voluptate unde voluptatibus neque quos perspiciatis voluptatem accusantium? Eos reiciendis inventore, facere possimus asperiores nemo consectetur veritatis, fugit eveniet commodi ab! Blanditiis, officiis commodi doloremque illum sequi recusandae excepturi sapiente quas cumque dolorem quam dolor omnis fugit necessitatibus odit veniam repellat voluptatem deserunt dicta quaerat animi. Veritatis obcaecati, recusandae aspernatur, error alias omnis perferendis suscipit aliquam, accusamus hic reprehenderit tenetur dolore! Ullam voluptas, fugit ducimus nobis nostrum cum dicta, modi id aliquam est et mollitia ipsum libero tenetur quas ut. Veritatis necessitatibus dignissimos ducimus. Rerum labore fugit illum ab consectetur, fugiat sit ex. Magni eveniet incidunt eum facilis neque, minus dolor inventore eius reprehenderit nihil optio porro laborum sapiente amet. Exercitationem, repellendus! Soluta mollitia porro illo! Sapiente mollitia perspiciatis officiis quam sit tempore autem eveniet ratione hic nostrum alias exercitationem enim neque error illum ut sed officia voluptatum, corporis velit ducimus possimus numquam aut. Magni enim nam, praesentium, quaerat quasi impedit voluptate dicta reprehenderit corporis vitae delectus fugit provident itaque ratione cumque optio sit ipsam, deserunt porro cupiditate esse illo. Accusantium maiores qui, repudiandae sint cumque temporibus cum eveniet velit placeat itaque rerum pariatur eos dolorum in assumenda dolorem. Ut eveniet esse commodi provident maxime, ratione delectus obcaecati earum, ullam ab, incidunt nihil illo voluptatum itaque dicta vero quis architecto? Harum dignissimos porro, aliquid recusandae hic ex quia vero facilis assumenda, animi, nobis quod est? Reiciendis voluptate dolor doloremque ad nihil, est fuga vitae facilis voluptatibus quia, cupiditate fugiat ratione, doloribus temporibus. Voluptatibus minima hic nihil. Hic, aperiam esse. Nihil debitis cupiditate ea voluptatibus?
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
