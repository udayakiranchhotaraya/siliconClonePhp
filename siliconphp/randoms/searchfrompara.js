function searchFromString(){
    //alert(document.getElementById('getPara').value.search(document.getElementById('search').value));
    let para = document.getElementById('getPara').value;
    let searchThis = document.getElementById('search').value;
    let index = para.search(searchThis);
    if (index == -1)
        alert(searchThis + " not found!!");
    else alert(searchThis + " found at " + index);
}

$(document).ready(
    function(){
        //button
        $('#button-addon2').on({
            //mouseenter: function(){$(this).css("background-color", "YellowGreen")},
            //mouseenter: function(){$(this).toggleClass("btn btn-success my-2 my-sm-0")},
            //mouseleave: function(){$(this).css("background-color", "Blue")},
            //mouseleave: function(){$(this).toggleClass("btn btn-primary my-2 my-sm-0")},
            click: function(){
                let para = document.getElementById('getPara').value;
                let searchThis = document.getElementById('search').value;
                let index = para.search(searchThis)+parseInt(1);
                if (index > -1)
                {
                    let disp = searchThis + " found at " + index;
                    $('#failed').hide();
                    $('#success').hide();
                    $('#success').toggle();
                    document.getElementById('searchDisp').innerHTML = document.getElementById('search').value;
                    document.getElementById('result').innerHTML = index;
                    //$('#success').toggle(1000);
                }
                else 
                {
                    $('#success').hide();
                    $('#failed').hide();
                    $('#failed').toggle();
                    //$('#failed').toggle(1000);
                }
            }
        }
        );
        //counter
        $('#getPara').keyup(function(){
            var textE = $(this).val();
            $('#textlength').text(textE.length)
        });
        $('#appendb').click(function(){
            $('#theText').append($('#textBox').val());
            //$('#theText').append("1");
        });
        $('#prependb').click(function(){
            $('#theText').prepend($('#textBox').val());
            //$('#theText').prepend("3");
        });
        $('#afterb').click(function(){
            $('#theText').after($('#textBox').val());
            //$('#theText').after("4+");
        });
        $('#beforeb').click(function(){
            $('#theText').before($('#textBox').val());
            //$('#theText').before("2");
        });

        $('#failed').hide(1000);
        $('#success').hide(1000);
    }
);