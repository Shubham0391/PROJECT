
$(function() {
    $("#datepicker").change(function(){
        var element = $(this);
        var selected_date = element.attr("value");

        var str =  selected_date;
        var res = str.split(" ");

        var eng_day =  res[0];
        var month = res[1];
        var day = res[2];
        var year = res[3];


        if(eng_day == 'Sun')
        {
            eng_day = 'اتوار';

        }
        if(eng_day == 'Mon')
        {
            eng_day = 'سوموار';
        }
        if(eng_day == 'Tue')
        {
            eng_day = 'منگل';
        }
        if(eng_day == 'Wed')
        {
            eng_day = 'بدھ';
        }
        if(eng_day == 'Thu')
        {
            eng_day = 'جمعرات';
        }
        if(eng_day == 'Fri')
        {
            eng_day = 'جمعه';
        }
        if(eng_day == 'Sat')
        {
            eng_day = 'ہفتہ';
        }



        if(month == 'Jan')
        {
            month = 'جنوری';
        }

        if(month == 'Feb')
        {
            month = 'فروري';
        }

        if(month == 'Mar')
        {
            month = 'مارچ';
        }


        if(month == 'Apr')
        {
            month = 'اپريل';
        }

        if(month == 'May')
        {
            month = 'مئ';
        }

        if(month == 'Jun')
        {
            month = 'جون';
        }

        if(month == 'Jul')
        {
            month = 'جولائ';
        }

        if(month == 'Aug')
        {
            month = 'اگست';
        }

        if(month == 'Sep')
        {
            month = 'ستمبر';
        }

        if(month == 'Oct')
        {
            month = 'اکتوبر';
        }

        if(month == 'Dec')
        {
            month = 'دسمبر';
        }

        var result = eng_day + " " + day + " " + month + " " + year ;

        document.getElementById('datepicker').value = result;


    });
});

$(function() {
    $("#datepicker2").change(function(){
        var element = $(this);
        var selected_date = element.attr("value");

        var str =  selected_date;
        var res = str.split(" ");

        var eng_day =  res[0];
        var month = res[1];
        var day = res[2];
        var year = res[3];


        if(eng_day == 'Sun')
        {
            eng_day = 'اتوار';

        }
        if(eng_day == 'Mon')
        {
            eng_day = 'سوموار';
        }
        if(eng_day == 'Tue')
        {
            eng_day = 'منگل';
        }
        if(eng_day == 'Wed')
        {
            eng_day = 'بدھ';
        }
        if(eng_day == 'Thu')
        {
            eng_day = 'جمعرات';
        }
        if(eng_day == 'Fri')
        {
            eng_day = 'جمعه';
        }
        if(eng_day == 'Sat')
        {
            eng_day = 'ہفتہ';
        }



        if(month == 'Jan')
        {
            month = 'جنوری';
        }

        if(month == 'Feb')
        {
            month = 'فروري';
        }

        if(month == 'Mar')
        {
            month = 'مارچ';
        }


        if(month == 'Apr')
        {
            month = 'اپريل';
        }

        if(month == 'May')
        {
            month = 'مئ';
        }

        if(month == 'Jun')
        {
            month = 'جون';
        }

        if(month == 'Jul')
        {
            month = 'جولائ';
        }

        if(month == 'Aug')
        {
            month = 'اگست';
        }

        if(month == 'Sep')
        {
            month = 'ستمبر';
        }

        if(month == 'Oct')
        {
            month = 'اکتوبر';
        }

        if(month == 'Dec')
        {
            month = 'دسمبر';
        }

        var result = eng_day + " " + day + " " + month + " " + year ;

        document.getElementById('datepicker2').value = result;


    });
});


