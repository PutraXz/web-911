@php
    $datas = $datas = [
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(14).png '],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(15).png '],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(16).png '],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(17).png ']

    ];
@endphp
<div class="my-5">
    <div class="container">
        <div class="row" >
            <?php foreach ( $datas as $data) : ?>
                <div class="col-6">
                    <div class="card flex-row flex-wrap mt-5" style="width:540px;height:224px">
                        <img src="{{$data['img']}}" alt="Card image cap" style=" width:184px; height:184px;margin: 20px 18px 20px 17px;" class="img-fluid">
                        <div class="card-block px-2" style="padding-left: 0 !important;">
                            <h3 class="card-title pt-4 pb-1" style="text-align: center; width: 182px;margin-top:38px    ">{{$data['title']}}</h3>
                        	<p class="card-text" style="width:310px">{{$data['text']}}</p>
			            </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
