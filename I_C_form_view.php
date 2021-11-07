<?php $ui = new UI();?>
<body style="overflow:hidden;" class="skin-blue">
    <div align="center" >
        <?php
            echo '<br>';
            echo '<br>';

            $bodyrow=$ui->row()->width(6)->m_width(6)->t_width(6)->open();

            if($err_code==1) {
			   $ui->callout()
			   ->uiType("error")
			   ->desc("Invalid details")
			   ->show();
			}
            $form = $ui->form()
                ->multipart()
                ->action('I_C_controller/index')
                ->open();

            $ui->select()
                ->name('session_year')
                ->label('Session year')
                ->width(8)
                ->options(array(
                        $ui->option()->value('NULL')->text('---SELECT SESSION YEAR---')->selected($type_id=='NULL'),
                        $ui->option()->value('2016-2017')->text('2016-2017')->selected($type_id=='2016-2017'),
                        $ui->option()->value('2017-2018')->text('2017-2018')->selected($type_id=='2017-2018'),
                        $ui->option()->value('2018-2019')->text('2018-2019')->selected($type_id=='2018-2019'),
                        $ui->option()->value('2019-2020')->text('2019-2020')->selected($type_id=='2019-2020'),
                        $ui->option()->value('2020-2021')->text('2020-2021')->selected($type_id=='2020-2021'),
                        $ui->option()->value('2021-2022')->text('2021-2022')->selected($type_id=='2021-2022'),
                        ))
                ->required()
                ->show();

            $ui->select()
                ->name('session')
                ->label('Session')
                ->width(8)
                ->options(array(
                    $ui->option()->value('NULL')->text('---SELECT SESSION TYPE---')->selected($type_id=='NULL'),
                    $ui->option()->value('Monsoon')->text('Monsoon')->selected($type_id=='Monsoon'),
                    $ui->option()->value('Winter')->text('Winter')->selected($type_id=='Winter'),
                    $ui->option()->value('Summer')->text('Summer')->selected($type_id=='Summer')
                    ))
                ->required()
                ->show();

            $ui->select()
                ->name('inconsistency_type')
                ->label('Type of inconsistency')
                ->width(8)
                ->options(array(
                    $ui->option()->value('NULL')->text('---SELECT INCONSISTENCY TYPE---')->selected($type_id=='NULL'),
                    $ui->option()->value('duplicate_em_registrations')->text('Duplicate sem registrations')->selected($type_id=='duplicate_sem_registrations'),
                    $ui->option()->value('duplicate_courses')->text('Duplicate courses')->selected($type_id=='duplicate_courses')
                    ))
                ->required()
                ->show();

            $bodyrow->close();
        ?>
        <?php
            $col_buttn1=$ui->row()->width(12)->open();
            $ui->button()
                ->value('Submit')
                ->uiType('primary')
                ->submit()
                ->name('submit')

                ->icon($ui->icon('check'))
                ->show();
                $col_buttn1->close();

            $form->close();
        ?>
        </div>

    
