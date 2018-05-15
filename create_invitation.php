<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creating Invite E-ticket</title>
</head>
<style>
    form
    {
        margin: 0 auto;
        max-width: 800px;
        width: 100%;
        border: 3px dashed #007768c7;

    }        
    form > div 
    {
        margin: 10px;
    }

    button
    {
        padding: 5px 20px;
        display: block;
        margin: 10px auto;
    }
    input
    {
        width: 50%;
    }
    input.sml
    {
        width: 20%;
    }
    input.date-picker
    {
        width: 22%;
    }    
    input.file-picker
    {
        width: 30%;
        background-color: #0320;
    }   
    input.xsml
    {
        width: 5%;
    }
    button, input.file-picker{
        border: 2px solid #0303;
        border-radius: 2px;
    }
    button:hover
    {
        background-color: #676967a8;
    }
</style>
<body>
    <form method="post" action="invite_template" enctype='multipart/form-data'>
        <div>
            <label for="activity_name">Назва заходу:</label>
            <input type="text" name="activity_name" required>
        </div>
        <div>
            <label for="event_date">Дата, час заходу:</label>
            <input type="datetime-local" name="event_date" class="date-picker" required>
        </div>
        <div>
            <label for="event_address">Місто:</label>
            <input type="text" name="event_city" class="sml" required>
        </div>
        <div>
            <label for="event_address">Адреса проведення:</label>
            <input type="text" name="event_address" required>
        </div>
        <div>
            <label for="event_sector">Сектор:</label>
            <input type="text" name="event_sector" class="sml" required>
        </div>
        <div>
            <label for="event_row">Ряд:</label>
            <input type="text" name="event_row" class="xsml">
        </div>
        <div>
            <label for="event_place">Місце:</label>
            <input type="text" name="event_place" class="xsml">
        </div>
        <div>
            <label for="event_img_link">Aфіша заходу:</label>
            <input type="text" name="event_img_link" placeholder="введіть url або оберіть файл для завантаження ---->">
            <input type="file" name=uploadfile accept=".jpg, .jpeg, .png" class="file-picker">
        </div>
        <div>
            <label for="event_img_link">Штрихкод:</label>
            <input type="text" name="barcode_text" class="sml" required>
        </div>
        <button action="submit">OK</button>  
    </form>
</body>
</html>
