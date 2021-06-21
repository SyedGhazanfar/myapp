<div class="sidepanel">
    <ul class="side-list-box">
        <a id="profile" class="list-link" onclick="getId(this.id)">
            <li class="list-item">Dashboard</li>
        </a>
        <a class="list-link" id="user">
            <li class="list-item">Users</li>
            <div class="drop-custom" style="display: none">
                <ul>
                    <a onclick="getId(this.id)" id="add-user">
                        <li>Add User</li>
                    </a>
                    <a onclick="getId(this.id)" id="manage-user">
                        <li>Manage Users</li>
                    </a>
                </ul>
            </div>
        </a>
    </ul>
</div>






<script>
    
$('#user').click(function(){
    $('.drop-custom').slideToggle();
})

function getId(id){
      location.href=id
}


</script>