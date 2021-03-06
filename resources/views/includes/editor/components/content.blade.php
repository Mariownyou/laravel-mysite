<div class="form-control">
    <div class="form-subcontrol">

        <div class="form-label form-label-sticky input-label">
            <label>
                Текст <a href="http://blogengine.ru/help/text/" target="_blank"
                         class="nu e2-admin-link"><span class="e2-svgi"><svg id="Layer_1"
                                                                             data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                                                             viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.27 5.39a2.82 2.82 0 0 1 .59-.94 2.65 2.65 0 0 1 .91-.62A3.08 3.08 0 0 1 8 3.61a3.76 3.76 0 0 1 1.42.23 2.76 2.76 0 0 1 .92.58 2.09 2.09 0 0 1 .5.75 2.14 2.14 0 0 1 .15.75 2.55 2.55 0 0 1-.15.95 2.31 2.31 0 0 1-.37.64 2.47 2.47 0 0 1-.53.49l-.51.37a2.37 2.37 0 0 0-.43.39l-.12.16a3.67 3.67 0 0 0-.11.67c0 .13-.22.23-.5.23h-.62c-.28 0-.5-.12-.5-.27a7.12 7.12 0 0 1 .07-.77 1.49 1.49 0 0 1 .13-.37 2.51 2.51 0 0 1 .38-.59 3 3 0 0 1 .46-.43q.24-.18.44-.36A1.62 1.62 0 0 0 9 6.64a1 1 0 0 0 .11-.54 1.09 1.09 0 0 0-.27-.82A1 1 0 0 0 8 5a1.16 1.16 0 0 0-.56.13 1.11 1.11 0 0 0-.38.34 1.44 1.44 0 0 0-.18.53v.19a.5.5 0 0 1-.52.42h-.81a.44.44 0 0 1-.45-.5 2.91 2.91 0 0 1 .17-.72zm3.09 5.15a.5.5 0 0 1 .5.5v.85a.5.5 0 0 1-.5.5h-.88a.5.5 0 0 1-.5-.5V11a.5.5 0 0 1 .5-.5z"
                                                            stroke="none"></path>
                                                        <path
                                                            d="M8 0a8 8 0 1 0 8 8 8 8 0 0 0-8-8zm0 15a7 7 0 1 1 7-7 7 7 0 0 1-7 7z"
                                                            stroke="none"></path>
                                                    </svg></span></a>
            </label>
        </div>

        <div class="form-element">
            <div class="editor-spacer"></div>
            <div contenteditable="true" class="editor required" id="text" tabindex="2" autofocus="false">
                <p><br></p>
            </div>
            <input type="hidden" id="content" name="content">
        </div>
    </div>

</div>


@push('styles')
    <style>
        .editor {
            min-height: 400px;
            font-family: inherit;
            font-size: 16px;
            line-height: 22px;
            border: none;
            padding: 6px;
            box-shadow: none;
            transition-property: background, border-color, box-shadow, fill;
            transition-duration: var(--time);
            transition-timing-function: ease-out;
            vertical-align: baseline;
            background: var(--inputBackgroundColor);
            color: var(--inputTextColor);
            border-radius: var(--borderRadius);
            resize: vertical;
            display: block;
            outline: none;
        }

        .editor:focus {
            transition: none
        }

        .editor p {
            max-width: 100%;
        }

        .editor-spacer {
            height: 25px;
        }

        @media (min-width: 735px) {
            .editor-spacer {
                display: none;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        const editor = document.getElementById('text')
        const content = document.getElementById('content')

        editor.addEventListener('input', () => {
            html = editor.innerHTML
            console.log(editor.innerHTML)
            content.value = html

            if (html.length == 0) {
                console.log('placed')
                editor.innerHTML += '<p><br></p>'
            }
        })

        $(".editor").on('keydown', function(event) {
            if (event.keyCode === 8 && $(this).html().trim() == '<p><br></p>') {
                event.preventDefault();
            }
        })
    </script>
@endpush

