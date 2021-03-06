<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link(__("Nom application"), array(
                                            'controller' => 'articles',
                                            'action' => 'index'),
                                            array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="active">
                <?php 
				if ($this->Session->check('Auth.User')) {
                    echo $this->Html->link("Hello " . $this->Session->read('Auth.User.username') . "[" . $this->Session->read('Auth.User.role') . "]",
                                            array('controller' => 'users', 'action' => 'view', $this->Session->read('Auth.User.id')));
                    echo "</li><li>";
                    echo $this->Html->link("[Logout]", array(
                        'controller' => 'users',
                        'action' => 'logout'));
                } else {
                    echo $this->Html->link("[Login]", array(
                        'controller' => 'users',
                        'action' => 'login')
                    );
                }
                ?>			
			</li>
			<li><a href="#">Link</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
				<ul class="dropdown-menu">
                    <?php echo $this->I18n->flagSwitcher(array(
                       'class' => 'languages',
                       'id' => 'language-switcher'
                        ));
                ?>
				</ul>
			</li>
		</ul><!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->