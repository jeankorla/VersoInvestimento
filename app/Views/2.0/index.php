<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentoria</title>
</head>

<body
    style="
        width: 100%;
        height: 100vh;

        padding: 3rem 1.25vw 1.25vw 1.25vw;

        overflow: hidden;

        background-color: #aaa;
    "
>

    <div
        id="signUpForm"
        style="
            width: 100%;
            height: 100%;
            max-height: 95vh;

            overflow-y: auto;
            overflow-x: hidden;

            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        "
    >

        <form method="POST" action="<?= base_url('home/salvar') ?>">
        </form>

    </div>

    
    
    

</body>

</html>