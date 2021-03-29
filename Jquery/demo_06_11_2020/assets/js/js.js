$(document).ready(function() {
    //logic goes here
    //alert("$ syntax");

    $("#info").css("text-decoration", "underline");
    $("#firstName").html("Dayana");
    $("#lastName").html("Dimitrova");

    $(".descendants span").css("opacity", "0.5");

    $(".bordered").css("border-style", "dotted");
    $(".bordered ul li:first-child").css("background","grey");

    $("tr:odd").css("background","lightblue");

    // EVENTS
    //show table
    $("#show").click(function(){
        $("table").addClass("active");
    })
    //hide table
    $("#hide").click(function(){
        $("table").removeClass("active");
    })
    //toggle table
    $("#toggle").click(function(){
        $("table").toggleClass("active");
    })

    // 
    $("#changeFontsize").on("click", function () {
        $(".paragraph").css("font-size","2em");
    })
    $("#changeFontsize").dblclick(function(){
        $(".paragraph").css("background-color","lightblue");
    })


    $("#keyEvent").on("keyup",function(){
        $("#keyEvent").css("background","yellow");
    })

    $(".bordered").css("transition","0.5s");
    $(".bordered").mouseover(function(){
        $(".bordered").css({"background":"green","color":"white"});
    })
    $(".bordered").mouseleave(function(){
        $(".bordered").css({"background":"green","color":"black"});
    })
   
    //EFFECTS
    $("#hideEffect").click(function() {
        $(".greeting").hide();
    })
    $("#showEffect").click(function() {
        $(".greeting").show();
    })
    $("#fadeinEffect").click(function() {
        $(".greeting").fadeIn();
    })
    $("#fadeoutEffect").click(function() {
        $(".greeting").fadeOut();
    })
    $("#fadetoggleEffect").click(function() {
        $(".greeting").fadeToggle();
    })
});

// jQuery(document).ready(function() {
//     //logic goes here
//     alert("jQuery syntax");
// });