@php
    $datas = $datas = [
        ['title' => 'Emergency','text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.','img' =>  'images/image(2).png ', 'color' => '#F8AF9E', 'margin' => ' 0 73px 0 0;'],
        ['title' => 'After Sales','text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.','img' =>  'images/image(3).png ', 'color' => '#F9F498', 'margin' => ' 0 73px 0 0;'],
        ['title' => 'Biro Jasa','text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.','img' =>  'images/image(4).png ', 'color' => '#D9F7A1', 'margin'=> ' 0;']

    ];
@endphp

<div class="my-5">
    <div class="container">
        <h1 class="text-center">Layanan Mitra kami</h1>
        <div class="row mt-5">
            <?php foreach ( $datas as $data) : ?>
                <div class="col-4">
                    <div class="card" style="border-radius: 54px; background:{{$data['color']}};">
                        <img class="card-img-top" src="{{$data['img']}}" alt="Card image cap" style=" width:240px; height:238px;margin-left: 5.3em;margin-top: 0.8em; ">
                        <div class="card-body">
                            <h3 class="card-title" style="margin: 1rem 2rem 24px 2rem"><b>{{$data['title']}}</b></h3>
                            <p class="card-text" style="margin: 0 2rem 47px 2rem">{{$data['text']}}</p>
                            <a href="#" class="btn" style="margin: 0 199px 35px 32px; border-radius:2em; background-color: #C50F1C; color: #ffffff; padding: .3em 1.5em;">Gabung</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>





