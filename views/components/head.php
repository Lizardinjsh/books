<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Whisper&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title><?= $page_title ?></title>
    <style>
    :root
    {
     --color1: #323643;
     --color2: #606470;
     --color3: #93deff; 
     --color4: #f7f7f7; 
     /* --color5: #494D5F; */
     --text: #e5eaf5;    
    }
    header 
    {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
    }
    nav
    {
        display: flex;
        /* flex-direction: row; */
        justify-content: space-between;
        align-items: center;
        background-color: var(--color2);
        padding-left: 50px;
        padding-right: 50px;
        height: 35px;
    }
    a 
    {
        all: unset;
        cursor: pointer;
        /* font-family: "Whisper", cursive; */
    }
    nav > a
    {
        all: unset;
        font-family: "Whisper", cursive;
        font-size: 40px;
        cursor: pointer;
        color: var(--text);
    }
    main 
    {
        display: flex;
        margin-top: 50px;
        /* background-color: #CFCFCF; */
        box-sizing: border-box;
        position: relative;
        align-items: center;
        flex-direction: column;
    }
    body
    {
        margin-top: 50px;
        background-color: var(--color4);
        box-sizing: border-box;
    }
    .div-borrowd
    {
        flex-direction: row; 
        text-align: center;
    }
    li 
    {
        font-family: "Whisper", cursive;
    }
    .borrowed
    {
        font-family: "Roboto", sans-serif;
        padding: 0;
    }
    .div-for-input-divs
    {
        display: flex;
        box-sizing: border-box;
        flex-wrap: wrap;
        flex-direction: column;
        width: 20%;
        border-right: 1px solid black;
        /* justify-content: space-between; */
    }
    .numbered-input-div
    {
        display: flex;
        box-sizing: border-box;
        flex-direction: column;
        text-align: center;
    }
    .dropdown-input-div
    {
        display: flex;
        box-sizing: border-box;
        flex-direction: column;
        text-align: center;
    }
    .numbered-input
    {
        width: 120px;
        height: 20px;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    .dropdown-input
    {

    }
    .submit-numbered-index
    {
        width: 120px;
        height: 25px;
        color: white;
        background-color: #808080;
        border: 0;
        margin-top: 5px;
        /* border-radius: 6px; */
    }
    .numbered-input:focus 
    {
        outline: none;
        border:1px solid blue;
        box-shadow: 0 0 5px #719ECE;
    }
    .output-index
    {
        width: 60%;
        text-align: center;
        align-items: center;
        position: absolute;
        margin-left: 20%;
        left: 0;
        top: 0;
        /* border-style: dotted; */

    }
    .funny-font
    {
        font-family: "Whisper", cursive;
    }
    h1
    {
        font-family: "Roboto", sans-serif;
        font-weight: 700;
        font-style: normal;
        color: var(--color1);
    }
    p
    {
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }
    .delete-button
    {
        all: unset;
        margin-top: 5px;
        width: 200px;
        background-color: red;
        color: white;
        border: 1px solid black;
        cursor: pointer;
        text-align: center;
    }
    label
    {
        position: relative;
        display: inline-block;
    }
    .invalid-data
    {
        position: absolute;
        top: 100%;
        left: 0;
        color: red;
        font-size: 0.8em;
    }
    .delete_form
    {
        display: inline-block;
    }
    li
    {
        
        list-style-type: none;
    }
    .red_but
    {
        text-decoration:none;
        margin-top: 17px;
        color: red;
        border: 1px solid red;
        padding: 5px;
        border-radius: 5px;
        font-weight: bold;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }
    .green_but
    {
        text-decoration:none;
        margin-top: 17px;
        color: green;
        border: 1px solid green;
        padding: 5px;
        border-radius: 5px;
        font-weight: bold;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }
    .blue_but
    {
        text-decoration:none;
        margin-top: 17px;
        color: blue;
        border: 1px solid blue;
        padding: 5px;
        border-radius: 5px;
        font-weight: bold;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }
    .brown_but
    {
        text-decoration:none;
        margin-top: 17px;
        color: brown;
        border: 1px solid brown;
        padding: 5px;
        border-radius: 5px;
        font-weight: bold;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }
    .form-edit
    {
        margin-bottom: 10px;
    }
    .div-borrowed-books
    {
        width: max-content;
        flex-direction: row;
    }
    form
    {
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }
    .index-cells
    {
        display: block;
        width: 100%;
        height: 100%;
        /* margin-left: 5px; */
        margin-right: 5px;
    }
    th
    {
        padding-left: 5px;
        padding-right: 5px;
    }

    .div-index
    {
        background-color: var(--color2);
        color: var(--text);
        font-family: "Roboto", sans-serif;
        font-style: normal;
        text-align: center;
        padding: 7px;
        border-radius: 15px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
    button
    {
        text-decoration: none;
        margin-top: 17px;
        color: var(--color1);
        border: 1px solid var(--color1);
        padding: 5px;
        border-radius: 5px;
        font-weight: bold;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        background-color: var(--color4);
        font-size: 16px;
    }
    @media (max-width: 420px) {
        nav > a
        {
            font-size: 20px;
        }
        nav
        {
            padding-left: 20px;
            padding-right: 20px;
            height: 25px;
        }
        tr > td
        {
            font-size: 10px;
            font-weight: 500;
        }
        .borrowed
        {
            font-size: 11px;
        }
    }
</style>
</head>
<body>