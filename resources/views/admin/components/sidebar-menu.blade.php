<div class="ui inverted left vertical sidebar menu">
   <div class="ui grid ">
       <div class="logo column center aligned">
           <h2>Menu</h2>
       </div>
   </div>

   <div class="side_menu three wide column">
       <div class="ui grid">
           <div class="column profile">
               <img class="ui avatar image" src="/images/avatar.png">
               <span>Username</span>
           </div>
       </div>

       <div class="side_menu_nav_header ui grid">
           <div class="column">
               <p><a class="item" href="/dashboard">Dashboard</a></p>
           </div>
       </div>

       <div class="side_nav ui grid">
           <div class="column">
               @include('admin.components.side-nav')
           </div>
       </div>
   </div>
</div>
