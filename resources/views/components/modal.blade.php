@props([
'action',
//
'title',
//
'footer',
//
'triggerButtonclass'
])

<button type="button" class="{{$triggerButtonclass}}" data-bs-toggle="modal" data-bs-target="#staticBackdrop">{{$triggerButton}}</button>
<!-- Modal -->
<form action='{{$action}}' method="post">
    @method('post')
    @csrf
    <div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h1 class='modal-title fs-5' id='staticBackdropLabel'>{{$title}}</h1>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <!-- body -->
                <div class='modal-body'>
                    <!-- input -->
                    {{$slot}}

                </div>
                <div class='modal-footer'>
                    {{$footer}}
                </div>
            </div>
        </div>
    </div>
</form>