$(document).ready(function () {
    $('#menu-toggle').on('click', function () {
        
        $('#sidebar').toggleClass('active');
    
        $('#main-content').toggleClass('shifted'); 
        $('#menu-toggle').toggleClass('shifted');
        $('#breadcrumb').toggleClass('shifted');
    });
});