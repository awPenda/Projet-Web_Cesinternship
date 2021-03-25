$(document).ready(function(){

    $('#search_select_type').change(function(){
        //clear display
        $("#user_attributes").css("display", "none");

        //display attributes of the choosen category
        if($('#create_select_type option:selected').text()=="Student"){
            $("#user_attributes").css("display", "block");
            $("#student_attributes").css("display", "block");
        }
        if($('#create_select_type option:selected').text()=="Delegate"){
            $("#user_attributes").css("display", "block");
            $("#delegate_attributes").css("display", "block");
        }
        if($('#create_select_type option:selected').text()=="Pilot"){
            $("#user_attributes").css("display", "block");
            $("#pilot_attributes").css("display", "block");
        }
        if($('#create_select_type option:selected').text()=="Admin"){
            $("#user_attributes").css("display", "block");
            $("#admin_attributes").css("display", "block");
        }
        if($('#create_select_type option:selected').text()=="Internship"){
            $("#internship_attributes").css("display", "block");
        }
        if($('#create_select_type option:selected').text()=="Compagny"){
            $("#compagny_attributes").css("display", "block");
        }
        
        

    
        
    });
    







});