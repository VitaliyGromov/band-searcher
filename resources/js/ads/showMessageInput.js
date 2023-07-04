const statusId = document.getElementById('status');

statusId.addEventListener('change', showMeassageInput);

function showMeassageInput(){
    const selectedStatus = statusId.options[statusId.selectedIndex].text;
     
    if(selectedStatus === 'отклонено'){
        document.getElementById('message').classList.remove('d-none');
    } else {
        document.getElementById('message').classList.add('d-none');
    }
}