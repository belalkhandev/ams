<nav class="navigation-menu">
    <ul>
        <li><a href="{{ route('dashbboard.index') }}" class="index-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
        <li class="treeview">
            <a href="javascript:void(0)">
                <i class="fas fa-list"></i>
                <span>Admission Management</span>
                <i class="fas fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">New Admission</a></li>
                <li><a href="#">Admission List</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)">
                <i class="fas fa-list"></i>
                <span>Attendance</span>
                <i class="fas fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">Upload Attendance</a></li>
                <li><a href="#">Attendance Processing</a></li>
            </ul>
        </li>
        <li class="nav-title">Academic manage</li>
        <li class="treeview">
            <a href="javascript:void(0)">
                <i class="fas fa-list"></i>
                <span>Sessions</span>
                <i class="fas fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ route('session.create') }}">New Session</a></li>
                <li><a href="{{ route('session.index') }}">Session List</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)">
                <i class="fas fa-list"></i>
                <span>Class</span>
                <i class="fas fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ route('class.create') }}">New Class</a></li>
                <li><a href="{{ route('class.index') }}">Class list</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)">
                <i class="fas fa-list"></i>
                <span>Group</span>
                <i class="fas fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ route('group.create') }}">New Group</a></li>
                <li><a href="{{ route('group.index') }}">Group list</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)">
                <i class="fas fa-list"></i>
                <span>Section</span>
                <i class="fas fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ route('section.create') }}">New Section</a></li>
                <li><a href="{{ route('section.index') }}">Section list</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)">
                <i class="fas fa-list"></i>
                <span>Subject</span>
                <i class="fas fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">New Subject</a></li>
                <li><a href="#">Subject List</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)">
                <i class="fas fa-list"></i>
                <span>Syllabus</span>
                <i class="fas fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">New Syllabus</a></li>
                <li><a href="#">Syllabus List</a></li>
            </ul>
        </li>
        <li class="nav-title">Routine manage</li>
        <li class="treeview">
            <a href="javascript:void(0)">
                <i class="fas fa-list"></i>
                <span>Class Routine</span>
                <i class="fas fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">New Class Routine</a></li>
                <li><a href="#">Class Routine list</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)">
                <i class="fas fa-list"></i>
                <span>Exam Routine</span>
                <i class="fas fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">Exam Category</a></li>
                <li><a href="#">New Exam Routine</a></li>
                <li><a href="#">Exam Routine list</a></li>
            </ul>
        </li>
    </ul>
</nav>