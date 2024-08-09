@php
$data=\App\Models\Cmcorner::latest()->first();
@endphp

<div class="hero-main-left">
    <h4>Welcome</h4>
    <h2>Chief Minister Corner</h2>
    <p>Stronger the roots, wider the branches! Join me on Probasi, our platform for unity and
        progress. Together, let's weave a tapestry of ideas to shape the future of Tripura..</p>
        {!! isset($data) && !empty($data->image) ? '<img src="' . asset('upload/cmcorner/' . $data->image) . '"
            alt="Image Description">' : '' !!}

    <div class="layer">
        <a href="https://bharatvc.nic.in/join/browser/7157057726" target="_blank">Join Live</a>
    </div>
</div>
