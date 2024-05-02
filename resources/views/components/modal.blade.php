@props([
'action',
'title',
'footer',
])


<!-- Modal -->
<form action="{{$action}}">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$title}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body">
                    <!-- input -->
                    {{$slot}}

                </div>
                <div class="modal-footer">
                    {{$footer}}
                </div>
            </div>
        </div>
    </div>
</form>