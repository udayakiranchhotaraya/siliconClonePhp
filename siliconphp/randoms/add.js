function calculate(){
    let calc1=document.getElementById('calc1').value;
    let calc2=document.getElementById('calc2').value;
    let calc3=document.getElementById('calc3').value;
    
    calculated_value=parseInt(calc1)+parseInt(calc2)+parseInt(calc3);

    document.getElementById('calculated_value').innerHTML=calculated_value;
}