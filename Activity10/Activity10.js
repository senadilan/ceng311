$(function () {
    $("#birthday").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "1900:2025",
      dateFormat: "dd/mm/yy"
    });
    var languages = [
      "JavaScript",
      "Python",
      "Asp",
      "Lisp",
      "Perl",
      "Java",
      "C#",
      "C++",
      "Ruby",
      "Go",
      "Swift",
      "PHP",
      "R",
      "Haskell",
      "Bash",
      "Kotlin"
    ];
    $("#language").autocomplete({
      source: languages,
      minLength: 0 
    }).focus(function () {
      $(this).autocomplete("search", "");
    });
    var cities = [
        "Charlotte",
        "New York",
        "Washington DC",
        "Chicago",
        "Los Angeles",
        "San Francisco",
        "Houston",
        "Seattle",
        "Miami",
        "Boston"
      ];
    
      $("#city").autocomplete({
        source: cities,
        minLength: 0
      }).focus(function () {
        $(this).autocomplete("search", "");
      });
    
    });