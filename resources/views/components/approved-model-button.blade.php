<style>
    .button-container {
        display: flex;
        justify-content: center;
        margin-top: 2rem;
    }

    .button {
        display: flex;
        flex-direction: column;
        align-items: center;

        padding: 1rem;
        margin: 0 1rem;
        transition: border-color 0.3s ease;
        text-decoration: none;
        position: relative;
        width: 200px;
        border:2px solid #387ADF !important;
        border-radius: 0.5rem;
        color: rgb(59 130 246);
    }


    .button:hover {
        background-color: rgba(56, 122, 223, 0.1); /* Add background color on hover */
    }


    .icon {
        font-size: 1.5rem;
    }

    .text {
        margin-top: 0.5rem;
        font-weight: bold;
    }

    .selected {
      border:1px solid #387ADF;
    }


    .selected::before {
        content: '';
        position: absolute;
        top: 0.5rem;
        left: 0.5rem;
        width: 1rem;
        height: 1rem;
        background-color: #387ADF;
        border-radius: 50%;
    }


    .sel {
        border: 1px solid #387ADF;
    }

    .sel::before {
        content: '';
        position: absolute;
        top: 0.5rem;
        left: 0.5rem;
        width: 1rem;
        height: 1rem;
        border: 2px solid #387ADF;
        border-radius: 50%;
    }
</style>

<div class="button-container">
    <a href="{{ route('model.approved') }}" class="button sel" id="model">
        <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 1024 1024" class="icon" version="1.1"><path d="M511.3 191.8H94c-16.4 0-29.8 13.3-29.8 29.7l-0.8 644.3c0 16.5 13.3 29.8 29.8 29.8h306.1l8.3 16.3c5.1 10 15.3 16.3 26.6 16.3h156c10.9 0 20.9-6 26.2-15.5l9.3-17h304c16.4 0 29.8-13.3 29.8-29.8V221.6c0-16.4-13.3-29.8-29.8-29.8H511.3z" fill="#387ADF"/><path d="M517.8 189.4c-5.3 3.6-12.1 4.3-18 1.7-32.7-14.4-143.8-59.4-248.8-59.4H144.5c-10.2 0-18.5 8.3-18.5 18.5v666.6c0 10.2 8.3 18.5 18.5 18.5h328.3c5.4 0 10.5 2.3 14 6.4l8.8 10.1c7.3 8.4 20.3 8.5 27.7 0.3l9.8-10.7c3.5-3.9 8.5-6.1 13.7-6.1h328.8c10.2 0 18.5-8.3 18.5-18.5l0.9-666.6c0-10.3-8.3-18.6-18.5-18.6H764.2c0 0.1-155.6-4.1-246.4 57.8z" fill="#FFFFFF"/><path d="M511 894.1l-31.3-36c-3.5-4.1-8.6-6.4-14-6.4H126.6c-10.2 0-18.5-8.3-18.5-18.5V126.6c0-10.2 8.3-18.5 18.5-18.5H253c100.6 0 204.6 39 247.2 56.9 5.6 2.3 11.9 1.8 17-1.3 94.5-58.4 239.7-55.8 249.4-55.6h132.1c10.3 0 18.6 8.3 18.5 18.6l-1 706.6c0 10.2-8.3 18.5-18.5 18.5h-340c-5.2 0-10.2 2.2-13.7 6.1l-33 36.2z m-363-82.4h336c5.4 0 10.5 2.3 14 6.4 7.3 8.4 20.3 8.5 27.7 0.3l0.6-0.6c3.5-3.9 8.5-6.1 13.7-6.1h336.2l0.9-663.7H765.7c-1.6 0-159.7-3.5-242.2 59.7l-0.7 0.5c-5.5 4.2-13 5-19.3 2l-0.8-0.4C501 209 371.5 148 252.9 148H148v663.7z" fill="#387ADF"/><path d="M511.3 200.1v667.5" fill="#FFFFFF"/><path d="M491.3 200.1h40v667.5h-40z" fill="#387ADF"/><path d="M576 291.6h256v40H576zM576 443.1h256v40H576zM576 611.5h256v40H576zM191 291.5h256v40H191zM191 443.1h256v40H191zM191 611.5h256v40H191z" fill="#387ADF"/></svg>
        </div>
        <div class="text">Approve module</div>
    </a>


</div>

<script>
    const buttons = document.querySelectorAll('.button');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            buttons.forEach(btn => btn.classList.remove('selected'));
            button.classList.add('selected');
        });
    });
</script>
