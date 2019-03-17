<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item active"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/library/dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/books')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">View All Books</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/Library/returnBook')}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Return Book</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('issue_books/create')}}" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Issue Book</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" data-toggle="modal" data-target="#addNewBookModal" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Add Book</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('members')}}" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Members</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/Library/addNewMember')}}" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Add New Members</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/issue_books')}}" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">View Issued Books</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/return_books')}}" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">View All Returned Books</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/library_settings/1/edit')}}" aria-expanded="false"><i class="mdi mdi-alert"></i><span class="hide-menu">Settings</span></a></li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>