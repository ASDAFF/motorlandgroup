<?php
// ����������� ������� ��������� ������ ������

IncludeModuleLangFile(__FILE__);

global $MESS, $DOCUMENT_ROOT;

CModule::AddAutoloadClasses(
    'thebrainstech.copyiblock',
    array(
        'TheBrains' => 'lib/classes.php'
    )
);
