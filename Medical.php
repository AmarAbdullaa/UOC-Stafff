<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Request Forms</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    color: #333;
}



.logo img {
    max-height:70px;
	widows: auto;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 30px;
	justify-content: flex-start;
	padding: 0;
	margin: 0;
}

nav{
	flex-grow: 1;
}

nav a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    padding: 5px 10px;
}

nav a.active {
  color:white;
  font-weight: bold;

}

.bell-icon, .profile-icon {
    cursor: pointer;
    justify-content: flex-end;

    
}

.bell-icon {
    background-color: transparent;
    border: none;
    font-size: 30px;
    color: #7f7f7f;
}
.bell-icon :hover{
    color: white;
}
.profile-icon img {
    height: 35px;
    border-radius: 50%;
    transition: border 0.3s ease;
}

.profile-icon img:hover {
    border: 2px solid #A87BBE;
}   

.nav a {
    margin-left: 20px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

.settings-icon {
    font-size: 18px;
    margin-left: 20px;
}

.content {
    margin-left: 220px;
    max-width: 100%;
    
    padding: 20px;
    background-color: #D8BFD8;
    border-radius: 8px;
    height: 100vh;
}

.content h1 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}


.form-section h2 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 15px;
    margin-top: 50px;   

}

.form-list {
    list-style: none;
    margin-bottom: 20px;
}

.form-list li {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    border-bottom: 1px solid #eee;
    font-size: 16px;
}
.form-list button , .next-btn{
    background-color: #007bff;
    color: white;
    border: none;
    padding: 5px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

.actions {
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
}

.cancel-btn {
    background: none;
    border: none;
    color: #333;
    cursor: pointer;
    font-size: 16px;
    margin-right: 20px;
}


    </style>
</head>
<body>

    <?php include 'nav.php'; ?>

   
    
    <main class="content">
        <h1>Fill in and submit medical request forms</h1>
        
        <section class="form-section">
            <h2>Step 1: Select a form</h2>
            <ul class="form-list">
                <li>
                    Preparticipation Physical Evaluation (PPE) Form
                    <button>Select</button>
                </li>
                <li>
                    Medical History Questionnaire
                    <button>Select</button>
                </li>
               
               
            </ul>
            
            <h2>Step 2: Complete the form</h2>
        </section>
        
        <div class="actions">
            <button class="cancel-btn">Cancel</button>
            <button class="next-btn">Next</button>
        </div>
    </main>
</body>
</html>
