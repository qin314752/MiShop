@extends('layout.index')
@section('title','商品分类')
@section('ltitle','添加分类')
@section('content')
	<div class="row">
		<div class="col-lg-12">
		    <!-- PAGE CONTENT BEGINS -->
		    <div class="alert alert-info">
		        <button class="close" data-dismiss="alert">
		            <i class="ace-icon fa fa-times"></i>
		        </button>
		        <i class="ace-icon fa fa-hand-o-right"></i>Please note that demo server is not configured to save the changes, therefore you may see an error message.</div>
		    <div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all col-md-12" id="gbox_grid-table" dir="ltr" style="width: 766px;">
		        <div class="ui-widget-overlay jqgrid-overlay" id="lui_grid-table"></div>
		        <div class="loading ui-state-default ui-state-active" id="load_grid-table" style="display: none;">Loading...</div>
		        <div class="ui-jqgrid-view" id="gview_grid-table" style="width: 766px;">
		            <div class="ui-jqgrid-titlebar ui-jqgrid-caption ui-widget-header ui-corner-top ui-helper-clearfix">
		                <a role="link" class="ui-jqgrid-titlebar-close ui-corner-all HeaderButton" style="right: 0px;">
		                    <span class="ui-icon ui-icon-circle-triangle-n"></span>
		                </a>
		                <span class="ui-jqgrid-title">jqGrid with inline editing</span></div>
		            <div class="ui-state-default ui-jqgrid-hdiv" style="width: 766px;">
		                <div class="ui-jqgrid-hbox">
		                    <table class="ui-jqgrid-htable" style="width: 748px;" role="grid" aria-labelledby="gbox_grid-table" cellspacing="0" cellpadding="0" border="0">
		                        <thead>
		                            <tr class="ui-jqgrid-labels" role="rowheader">
		                                <th id="grid-table_cb" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 25px;">
		                                    <div id="jqgh_grid-table_cb">
		                                        <input role="checkbox" id="cb_grid-table" class="cbox" type="checkbox">
		                                        <span class="s-ico" style="display:none">
		                                            <span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span>
		                                            <span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span>
		                                        </span>
		                                    </div>
		                                </th>
		                                <th id="grid-table_subgrid" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 25px;">
		                                    <div id="jqgh_grid-table_subgrid">
		                                        <span class="s-ico" style="display:none">
		                                            <span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span>
		                                            <span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span>
		                                        </span>
		                                    </div>
		                                </th>
		                                <th id="grid-table_myac" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 80px;">
		                                    <span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
		                                    <div id="jqgh_grid-table_myac" class="ui-jqgrid-sortable">
		                                        <span class="s-ico" style="display:none">
		                                            <span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span>
		                                            <span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span>
		                                        </span>
		                                    </div>
		                                </th>
		                                <th id="grid-table_id" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 61px;">
		                                    <span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
		                                    <div id="jqgh_grid-table_id" class="ui-jqgrid-sortable">ID
		                                        <span class="s-ico" style="display:none">
		                                            <span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span>
		                                            <span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span>
		                                        </span>
		                                    </div>
		                                </th>
		                                <th id="grid-table_sdate" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 91px;">
		                                    <span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
		                                    <div id="jqgh_grid-table_sdate" class="ui-jqgrid-sortable">Last Sales
		                                        <span class="s-ico" style="display:none">
		                                            <span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span>
		                                            <span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span>
		                                        </span>
		                                    </div>
		                                </th>
		                                <th id="grid-table_name" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 152px;">
		                                    <span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
		                                    <div id="jqgh_grid-table_name" class="ui-jqgrid-sortable">Name
		                                        <span class="s-ico" style="display:none">
		                                            <span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span>
		                                            <span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span>
		                                        </span>
		                                    </div>
		                                </th>
		                                <th id="grid-table_stock" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 71px;">
		                                    <span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
		                                    <div id="jqgh_grid-table_stock" class="ui-jqgrid-sortable">Stock
		                                        <span class="s-ico" style="display:none">
		                                            <span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span>
		                                            <span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span>
		                                        </span>
		                                    </div>
		                                </th>
		                                <th id="grid-table_ship" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 91px;">
		                                    <span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
		                                    <div id="jqgh_grid-table_ship" class="ui-jqgrid-sortable">Ship via
		                                        <span class="s-ico" style="display:none">
		                                            <span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span>
		                                            <span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span>
		                                        </span>
		                                    </div>
		                                </th>
		                                <th id="grid-table_note" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 152px;">
		                                    <span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
		                                    <div id="jqgh_grid-table_note" class="ui-jqgrid-sortable">Notes
		                                        <span class="s-ico" style="display:none">
		                                            <span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span>
		                                            <span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span>
		                                        </span>
		                                    </div>
		                                </th>
		                            </tr>
		                        </thead>
		                    </table>
		                </div>
		            </div>
		            <div class="ui-jqgrid-bdiv" style="height: 250px; width: 766px;">
		                <div style="position:relative;">
		                    <div></div>
		                    <table id="grid-table" tabindex="0" cellspacing="0" cellpadding="0" border="0" role="grid" aria-multiselectable="true" aria-labelledby="gbox_grid-table" class="ui-jqgrid-btable" style="width: 748px;">
		                        <tbody>
		                            <tr class="jqgfirstrow" role="row" style="height:auto">
		                                <td role="gridcell" style="height:0px;width:25px;"></td>
		                                <td role="gridcell" style="height:0px;width:25px;"></td>
		                                <td role="gridcell" style="height:0px;width:80px;"></td>
		                                <td role="gridcell" style="height: 0px; width: 61px;"></td>
		                                <td role="gridcell" style="height: 0px; width: 91px;"></td>
		                                <td role="gridcell" style="height: 0px; width: 152px;"></td>
		                                <td role="gridcell" style="height: 0px; width: 71px;"></td>
		                                <td role="gridcell" style="height: 0px; width: 91px;"></td>
		                                <td role="gridcell" style="height: 0px; width: 152px;"></td>
		                            </tr>
		                            <tr role="row" id="12" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
		                                <td role="gridcell" style="text-align:center;width: 25px;" aria-describedby="grid-table_cb">
		                                    <input role="checkbox" type="checkbox" id="jqg_grid-table_12" class="cbox" name="jqg_grid-table_12"></td>
		                                <td role="gridcell" aria-describedby="grid-table_subgrid" class="ui-sgcollapsed sgcollapsed" style="">
		                                    <a style="cursor:pointer;">
		                                        <span class="ui-icon ace-icon fa fa-plus center bigger-110 blue"></span>
		                                    </a>
		                                </td>
		                                <td role="gridcell" style="" title="" aria-describedby="grid-table_myac">
		                                    <div style="margin-left:8px;">
		                                        <div title="" style="float:left;cursor:pointer;" class="ui-pg-div ui-inline-edit" id="jEditButton_12" onclick="jQuery.fn.fmatter.rowactions.call(this,'edit');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover')" data-original-title="Edit selected row">
		                                            <span class="ui-icon ui-icon-pencil"></span>
		                                        </div>
		                                        <div title="" style="float:left;margin-left:5px;" class="ui-pg-div ui-inline-del" id="jDeleteButton_12" onclick="jQuery.fn.fmatter.rowactions.call(this,'del');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Delete selected row">
		                                            <span class="ui-icon ui-icon-trash"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none" class="ui-pg-div ui-inline-save" id="jSaveButton_12" onclick="jQuery.fn.fmatter.rowactions.call(this,'save');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Submit">
		                                            <span class="ui-icon ui-icon-disk"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none;margin-left:5px;" class="ui-pg-div ui-inline-cancel" id="jCancelButton_12" onclick="jQuery.fn.fmatter.rowactions.call(this,'cancel');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Cancel">
		                                            <span class="ui-icon ui-icon-cancel"></span>
		                                        </div>
		                                    </div>
		                                </td>
		                                <td role="gridcell" style="" title="12" aria-describedby="grid-table_id">12</td>
		                                <td role="gridcell" style="" title="2007-12-03" aria-describedby="grid-table_sdate">2007-12-03</td>
		                                <td role="gridcell" style="" title="LCD Monitor" aria-describedby="grid-table_name">LCD Monitor</td>
		                                <td role="gridcell" style="" title="Yes" aria-describedby="grid-table_stock">Yes</td>
		                                <td role="gridcell" style="" title="TNT" aria-describedby="grid-table_ship">TNT</td>
		                                <td role="gridcell" style="" title="note3" aria-describedby="grid-table_note">note3</td></tr>
		                            <tr role="row" id="1" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr ui-priority-secondary">
		                                <td role="gridcell" style="text-align:center;" aria-describedby="grid-table_cb">
		                                    <input role="checkbox" type="checkbox" id="jqg_grid-table_1" class="cbox" name="jqg_grid-table_1"></td>
		                                <td role="gridcell" aria-describedby="grid-table_subgrid" class="ui-sgcollapsed sgcollapsed" style="">
		                                    <a style="cursor:pointer;">
		                                        <span class="ui-icon ace-icon fa fa-plus center bigger-110 blue"></span>
		                                    </a>
		                                </td>
		                                <td role="gridcell" style="" title="" aria-describedby="grid-table_myac">
		                                    <div style="margin-left:8px;">
		                                        <div title="" style="float:left;cursor:pointer;" class="ui-pg-div ui-inline-edit" id="jEditButton_1" onclick="jQuery.fn.fmatter.rowactions.call(this,'edit');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover')" data-original-title="Edit selected row">
		                                            <span class="ui-icon ui-icon-pencil"></span>
		                                        </div>
		                                        <div title="" style="float:left;margin-left:5px;" class="ui-pg-div ui-inline-del" id="jDeleteButton_1" onclick="jQuery.fn.fmatter.rowactions.call(this,'del');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Delete selected row">
		                                            <span class="ui-icon ui-icon-trash"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none" class="ui-pg-div ui-inline-save" id="jSaveButton_1" onclick="jQuery.fn.fmatter.rowactions.call(this,'save');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Submit">
		                                            <span class="ui-icon ui-icon-disk"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none;margin-left:5px;" class="ui-pg-div ui-inline-cancel" id="jCancelButton_1" onclick="jQuery.fn.fmatter.rowactions.call(this,'cancel');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Cancel">
		                                            <span class="ui-icon ui-icon-cancel"></span>
		                                        </div>
		                                    </div>
		                                </td>
		                                <td role="gridcell" style="" title="1" aria-describedby="grid-table_id">1</td>
		                                <td role="gridcell" style="" title="2007-12-03" aria-describedby="grid-table_sdate">2007-12-03</td>
		                                <td role="gridcell" style="" title="Desktop Computer" aria-describedby="grid-table_name">Desktop Computer</td>
		                                <td role="gridcell" style="" title="Yes" aria-describedby="grid-table_stock">Yes</td>
		                                <td role="gridcell" style="" title="FedEx" aria-describedby="grid-table_ship">FedEx</td>
		                                <td role="gridcell" style="" title="note" aria-describedby="grid-table_note">note</td></tr>
		                            <tr role="row" id="3" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
		                                <td role="gridcell" style="text-align:center;" aria-describedby="grid-table_cb">
		                                    <input role="checkbox" type="checkbox" id="jqg_grid-table_3" class="cbox" name="jqg_grid-table_3"></td>
		                                <td role="gridcell" aria-describedby="grid-table_subgrid" class="ui-sgcollapsed sgcollapsed" style="">
		                                    <a style="cursor:pointer;">
		                                        <span class="ui-icon ace-icon fa fa-plus center bigger-110 blue"></span>
		                                    </a>
		                                </td>
		                                <td role="gridcell" style="" title="" aria-describedby="grid-table_myac">
		                                    <div style="margin-left:8px;">
		                                        <div title="" style="float:left;cursor:pointer;" class="ui-pg-div ui-inline-edit" id="jEditButton_3" onclick="jQuery.fn.fmatter.rowactions.call(this,'edit');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover')" data-original-title="Edit selected row">
		                                            <span class="ui-icon ui-icon-pencil"></span>
		                                        </div>
		                                        <div title="" style="float:left;margin-left:5px;" class="ui-pg-div ui-inline-del" id="jDeleteButton_3" onclick="jQuery.fn.fmatter.rowactions.call(this,'del');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Delete selected row">
		                                            <span class="ui-icon ui-icon-trash"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none" class="ui-pg-div ui-inline-save" id="jSaveButton_3" onclick="jQuery.fn.fmatter.rowactions.call(this,'save');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Submit">
		                                            <span class="ui-icon ui-icon-disk"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none;margin-left:5px;" class="ui-pg-div ui-inline-cancel" id="jCancelButton_3" onclick="jQuery.fn.fmatter.rowactions.call(this,'cancel');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Cancel">
		                                            <span class="ui-icon ui-icon-cancel"></span>
		                                        </div>
		                                    </div>
		                                </td>
		                                <td role="gridcell" style="" title="3" aria-describedby="grid-table_id">3</td>
		                                <td role="gridcell" style="" title="2007-12-03" aria-describedby="grid-table_sdate">2007-12-03</td>
		                                <td role="gridcell" style="" title="LCD Monitor" aria-describedby="grid-table_name">LCD Monitor</td>
		                                <td role="gridcell" style="" title="Yes" aria-describedby="grid-table_stock">Yes</td>
		                                <td role="gridcell" style="" title="TNT" aria-describedby="grid-table_ship">TNT</td>
		                                <td role="gridcell" style="" title="note3" aria-describedby="grid-table_note">note3</td></tr>
		                            <tr role="row" id="4" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr ui-priority-secondary">
		                                <td role="gridcell" style="text-align:center;" aria-describedby="grid-table_cb">
		                                    <input role="checkbox" type="checkbox" id="jqg_grid-table_4" class="cbox" name="jqg_grid-table_4"></td>
		                                <td role="gridcell" aria-describedby="grid-table_subgrid" class="ui-sgcollapsed sgcollapsed" style="">
		                                    <a style="cursor:pointer;">
		                                        <span class="ui-icon ace-icon fa fa-plus center bigger-110 blue"></span>
		                                    </a>
		                                </td>
		                                <td role="gridcell" style="" title="" aria-describedby="grid-table_myac">
		                                    <div style="margin-left:8px;">
		                                        <div title="" style="float:left;cursor:pointer;" class="ui-pg-div ui-inline-edit" id="jEditButton_4" onclick="jQuery.fn.fmatter.rowactions.call(this,'edit');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover')" data-original-title="Edit selected row">
		                                            <span class="ui-icon ui-icon-pencil"></span>
		                                        </div>
		                                        <div title="" style="float:left;margin-left:5px;" class="ui-pg-div ui-inline-del" id="jDeleteButton_4" onclick="jQuery.fn.fmatter.rowactions.call(this,'del');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Delete selected row">
		                                            <span class="ui-icon ui-icon-trash"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none" class="ui-pg-div ui-inline-save" id="jSaveButton_4" onclick="jQuery.fn.fmatter.rowactions.call(this,'save');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Submit">
		                                            <span class="ui-icon ui-icon-disk"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none;margin-left:5px;" class="ui-pg-div ui-inline-cancel" id="jCancelButton_4" onclick="jQuery.fn.fmatter.rowactions.call(this,'cancel');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Cancel">
		                                            <span class="ui-icon ui-icon-cancel"></span>
		                                        </div>
		                                    </div>
		                                </td>
		                                <td role="gridcell" style="" title="4" aria-describedby="grid-table_id">4</td>
		                                <td role="gridcell" style="" title="2007-12-03" aria-describedby="grid-table_sdate">2007-12-03</td>
		                                <td role="gridcell" style="" title="Speakers" aria-describedby="grid-table_name">Speakers</td>
		                                <td role="gridcell" style="" title="No" aria-describedby="grid-table_stock">No</td>
		                                <td role="gridcell" style="" title="ARAMEX" aria-describedby="grid-table_ship">ARAMEX</td>
		                                <td role="gridcell" style="" title="note" aria-describedby="grid-table_note">note</td></tr>
		                            <tr role="row" id="5" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
		                                <td role="gridcell" style="text-align:center;" aria-describedby="grid-table_cb">
		                                    <input role="checkbox" type="checkbox" id="jqg_grid-table_5" class="cbox" name="jqg_grid-table_5"></td>
		                                <td role="gridcell" aria-describedby="grid-table_subgrid" class="ui-sgcollapsed sgcollapsed" style="">
		                                    <a style="cursor:pointer;">
		                                        <span class="ui-icon ace-icon fa fa-plus center bigger-110 blue"></span>
		                                    </a>
		                                </td>
		                                <td role="gridcell" style="" title="" aria-describedby="grid-table_myac">
		                                    <div style="margin-left:8px;">
		                                        <div title="" style="float:left;cursor:pointer;" class="ui-pg-div ui-inline-edit" id="jEditButton_5" onclick="jQuery.fn.fmatter.rowactions.call(this,'edit');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover')" data-original-title="Edit selected row">
		                                            <span class="ui-icon ui-icon-pencil"></span>
		                                        </div>
		                                        <div title="" style="float:left;margin-left:5px;" class="ui-pg-div ui-inline-del" id="jDeleteButton_5" onclick="jQuery.fn.fmatter.rowactions.call(this,'del');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Delete selected row">
		                                            <span class="ui-icon ui-icon-trash"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none" class="ui-pg-div ui-inline-save" id="jSaveButton_5" onclick="jQuery.fn.fmatter.rowactions.call(this,'save');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Submit">
		                                            <span class="ui-icon ui-icon-disk"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none;margin-left:5px;" class="ui-pg-div ui-inline-cancel" id="jCancelButton_5" onclick="jQuery.fn.fmatter.rowactions.call(this,'cancel');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Cancel">
		                                            <span class="ui-icon ui-icon-cancel"></span>
		                                        </div>
		                                    </div>
		                                </td>
		                                <td role="gridcell" style="" title="5" aria-describedby="grid-table_id">5</td>
		                                <td role="gridcell" style="" title="2007-12-03" aria-describedby="grid-table_sdate">2007-12-03</td>
		                                <td role="gridcell" style="" title="Laser Printer" aria-describedby="grid-table_name">Laser Printer</td>
		                                <td role="gridcell" style="" title="Yes" aria-describedby="grid-table_stock">Yes</td>
		                                <td role="gridcell" style="" title="FedEx" aria-describedby="grid-table_ship">FedEx</td>
		                                <td role="gridcell" style="" title="note2" aria-describedby="grid-table_note">note2</td></tr>
		                            <tr role="row" id="6" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr ui-priority-secondary">
		                                <td role="gridcell" style="text-align:center;" aria-describedby="grid-table_cb">
		                                    <input role="checkbox" type="checkbox" id="jqg_grid-table_6" class="cbox" name="jqg_grid-table_6"></td>
		                                <td role="gridcell" aria-describedby="grid-table_subgrid" class="ui-sgcollapsed sgcollapsed" style="">
		                                    <a style="cursor:pointer;">
		                                        <span class="ui-icon ace-icon fa fa-plus center bigger-110 blue"></span>
		                                    </a>
		                                </td>
		                                <td role="gridcell" style="" title="" aria-describedby="grid-table_myac">
		                                    <div style="margin-left:8px;">
		                                        <div title="" style="float:left;cursor:pointer;" class="ui-pg-div ui-inline-edit" id="jEditButton_6" onclick="jQuery.fn.fmatter.rowactions.call(this,'edit');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover')" data-original-title="Edit selected row">
		                                            <span class="ui-icon ui-icon-pencil"></span>
		                                        </div>
		                                        <div title="" style="float:left;margin-left:5px;" class="ui-pg-div ui-inline-del" id="jDeleteButton_6" onclick="jQuery.fn.fmatter.rowactions.call(this,'del');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Delete selected row">
		                                            <span class="ui-icon ui-icon-trash"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none" class="ui-pg-div ui-inline-save" id="jSaveButton_6" onclick="jQuery.fn.fmatter.rowactions.call(this,'save');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Submit">
		                                            <span class="ui-icon ui-icon-disk"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none;margin-left:5px;" class="ui-pg-div ui-inline-cancel" id="jCancelButton_6" onclick="jQuery.fn.fmatter.rowactions.call(this,'cancel');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Cancel">
		                                            <span class="ui-icon ui-icon-cancel"></span>
		                                        </div>
		                                    </div>
		                                </td>
		                                <td role="gridcell" style="" title="6" aria-describedby="grid-table_id">6</td>
		                                <td role="gridcell" style="" title="2007-12-03" aria-describedby="grid-table_sdate">2007-12-03</td>
		                                <td role="gridcell" style="" title="Play Station" aria-describedby="grid-table_name">Play Station</td>
		                                <td role="gridcell" style="" title="No" aria-describedby="grid-table_stock">No</td>
		                                <td role="gridcell" style="" title="FedEx" aria-describedby="grid-table_ship">FedEx</td>
		                                <td role="gridcell" style="" title="note3" aria-describedby="grid-table_note">note3</td></tr>
		                            <tr role="row" id="7" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
		                                <td role="gridcell" style="text-align:center;" aria-describedby="grid-table_cb">
		                                    <input role="checkbox" type="checkbox" id="jqg_grid-table_7" class="cbox" name="jqg_grid-table_7"></td>
		                                <td role="gridcell" aria-describedby="grid-table_subgrid" class="ui-sgcollapsed sgcollapsed" style="">
		                                    <a style="cursor:pointer;">
		                                        <span class="ui-icon ace-icon fa fa-plus center bigger-110 blue"></span>
		                                    </a>
		                                </td>
		                                <td role="gridcell" style="" title="" aria-describedby="grid-table_myac">
		                                    <div style="margin-left:8px;">
		                                        <div title="" style="float:left;cursor:pointer;" class="ui-pg-div ui-inline-edit" id="jEditButton_7" onclick="jQuery.fn.fmatter.rowactions.call(this,'edit');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover')" data-original-title="Edit selected row">
		                                            <span class="ui-icon ui-icon-pencil"></span>
		                                        </div>
		                                        <div title="" style="float:left;margin-left:5px;" class="ui-pg-div ui-inline-del" id="jDeleteButton_7" onclick="jQuery.fn.fmatter.rowactions.call(this,'del');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Delete selected row">
		                                            <span class="ui-icon ui-icon-trash"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none" class="ui-pg-div ui-inline-save" id="jSaveButton_7" onclick="jQuery.fn.fmatter.rowactions.call(this,'save');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Submit">
		                                            <span class="ui-icon ui-icon-disk"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none;margin-left:5px;" class="ui-pg-div ui-inline-cancel" id="jCancelButton_7" onclick="jQuery.fn.fmatter.rowactions.call(this,'cancel');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Cancel">
		                                            <span class="ui-icon ui-icon-cancel"></span>
		                                        </div>
		                                    </div>
		                                </td>
		                                <td role="gridcell" style="" title="7" aria-describedby="grid-table_id">7</td>
		                                <td role="gridcell" style="" title="2007-12-03" aria-describedby="grid-table_sdate">2007-12-03</td>
		                                <td role="gridcell" style="" title="Mobile Telephone" aria-describedby="grid-table_name">Mobile Telephone</td>
		                                <td role="gridcell" style="" title="Yes" aria-describedby="grid-table_stock">Yes</td>
		                                <td role="gridcell" style="" title="ARAMEX" aria-describedby="grid-table_ship">ARAMEX</td>
		                                <td role="gridcell" style="" title="note" aria-describedby="grid-table_note">note</td></tr>
		                            <tr role="row" id="8" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr ui-priority-secondary">
		                                <td role="gridcell" style="text-align:center;" aria-describedby="grid-table_cb">
		                                    <input role="checkbox" type="checkbox" id="jqg_grid-table_8" class="cbox" name="jqg_grid-table_8"></td>
		                                <td role="gridcell" aria-describedby="grid-table_subgrid" class="ui-sgcollapsed sgcollapsed" style="">
		                                    <a style="cursor:pointer;">
		                                        <span class="ui-icon ace-icon fa fa-plus center bigger-110 blue"></span>
		                                    </a>
		                                </td>
		                                <td role="gridcell" style="" title="" aria-describedby="grid-table_myac">
		                                    <div style="margin-left:8px;">
		                                        <div title="" style="float:left;cursor:pointer;" class="ui-pg-div ui-inline-edit" id="jEditButton_8" onclick="jQuery.fn.fmatter.rowactions.call(this,'edit');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover')" data-original-title="Edit selected row">
		                                            <span class="ui-icon ui-icon-pencil"></span>
		                                        </div>
		                                        <div title="" style="float:left;margin-left:5px;" class="ui-pg-div ui-inline-del" id="jDeleteButton_8" onclick="jQuery.fn.fmatter.rowactions.call(this,'del');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Delete selected row">
		                                            <span class="ui-icon ui-icon-trash"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none" class="ui-pg-div ui-inline-save" id="jSaveButton_8" onclick="jQuery.fn.fmatter.rowactions.call(this,'save');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Submit">
		                                            <span class="ui-icon ui-icon-disk"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none;margin-left:5px;" class="ui-pg-div ui-inline-cancel" id="jCancelButton_8" onclick="jQuery.fn.fmatter.rowactions.call(this,'cancel');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Cancel">
		                                            <span class="ui-icon ui-icon-cancel"></span>
		                                        </div>
		                                    </div>
		                                </td>
		                                <td role="gridcell" style="" title="8" aria-describedby="grid-table_id">8</td>
		                                <td role="gridcell" style="" title="2007-12-03" aria-describedby="grid-table_sdate">2007-12-03</td>
		                                <td role="gridcell" style="" title="Server" aria-describedby="grid-table_name">Server</td>
		                                <td role="gridcell" style="" title="Yes" aria-describedby="grid-table_stock">Yes</td>
		                                <td role="gridcell" style="" title="TNT" aria-describedby="grid-table_ship">TNT</td>
		                                <td role="gridcell" style="" title="note2" aria-describedby="grid-table_note">note2</td></tr>
		                            <tr role="row" id="9" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr">
		                                <td role="gridcell" style="text-align:center;" aria-describedby="grid-table_cb">
		                                    <input role="checkbox" type="checkbox" id="jqg_grid-table_9" class="cbox" name="jqg_grid-table_9"></td>
		                                <td role="gridcell" aria-describedby="grid-table_subgrid" class="ui-sgcollapsed sgcollapsed" style="">
		                                    <a style="cursor:pointer;">
		                                        <span class="ui-icon ace-icon fa fa-plus center bigger-110 blue"></span>
		                                    </a>
		                                </td>
		                                <td role="gridcell" style="" title="" aria-describedby="grid-table_myac">
		                                    <div style="margin-left:8px;">
		                                        <div title="" style="float:left;cursor:pointer;" class="ui-pg-div ui-inline-edit" id="jEditButton_9" onclick="jQuery.fn.fmatter.rowactions.call(this,'edit');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover')" data-original-title="Edit selected row">
		                                            <span class="ui-icon ui-icon-pencil"></span>
		                                        </div>
		                                        <div title="" style="float:left;margin-left:5px;" class="ui-pg-div ui-inline-del" id="jDeleteButton_9" onclick="jQuery.fn.fmatter.rowactions.call(this,'del');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Delete selected row">
		                                            <span class="ui-icon ui-icon-trash"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none" class="ui-pg-div ui-inline-save" id="jSaveButton_9" onclick="jQuery.fn.fmatter.rowactions.call(this,'save');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Submit">
		                                            <span class="ui-icon ui-icon-disk"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none;margin-left:5px;" class="ui-pg-div ui-inline-cancel" id="jCancelButton_9" onclick="jQuery.fn.fmatter.rowactions.call(this,'cancel');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Cancel">
		                                            <span class="ui-icon ui-icon-cancel"></span>
		                                        </div>
		                                    </div>
		                                </td>
		                                <td role="gridcell" style="" title="9" aria-describedby="grid-table_id">9</td>
		                                <td role="gridcell" style="" title="2007-12-03" aria-describedby="grid-table_sdate">2007-12-03</td>
		                                <td role="gridcell" style="" title="Matrix Printer" aria-describedby="grid-table_name">Matrix Printer</td>
		                                <td role="gridcell" style="" title="No" aria-describedby="grid-table_stock">No</td>
		                                <td role="gridcell" style="" title="FedEx" aria-describedby="grid-table_ship">FedEx</td>
		                                <td role="gridcell" style="" title="note3" aria-describedby="grid-table_note">note3</td></tr>
		                            <tr role="row" id="10" tabindex="-1" class="ui-widget-content jqgrow ui-row-ltr ui-priority-secondary">
		                                <td role="gridcell" style="text-align:center;" aria-describedby="grid-table_cb">
		                                    <input role="checkbox" type="checkbox" id="jqg_grid-table_10" class="cbox" name="jqg_grid-table_10"></td>
		                                <td role="gridcell" aria-describedby="grid-table_subgrid" class="ui-sgcollapsed sgcollapsed" style="">
		                                    <a style="cursor:pointer;">
		                                        <span class="ui-icon ace-icon fa fa-plus center bigger-110 blue"></span>
		                                    </a>
		                                </td>
		                                <td role="gridcell" style="" title="" aria-describedby="grid-table_myac">
		                                    <div style="margin-left:8px;">
		                                        <div title="" style="float:left;cursor:pointer;" class="ui-pg-div ui-inline-edit" id="jEditButton_10" onclick="jQuery.fn.fmatter.rowactions.call(this,'edit');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover')" data-original-title="Edit selected row">
		                                            <span class="ui-icon ui-icon-pencil"></span>
		                                        </div>
		                                        <div title="" style="float:left;margin-left:5px;" class="ui-pg-div ui-inline-del" id="jDeleteButton_10" onclick="jQuery.fn.fmatter.rowactions.call(this,'del');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Delete selected row">
		                                            <span class="ui-icon ui-icon-trash"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none" class="ui-pg-div ui-inline-save" id="jSaveButton_10" onclick="jQuery.fn.fmatter.rowactions.call(this,'save');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Submit">
		                                            <span class="ui-icon ui-icon-disk"></span>
		                                        </div>
		                                        <div title="" style="float:left;display:none;margin-left:5px;" class="ui-pg-div ui-inline-cancel" id="jCancelButton_10" onclick="jQuery.fn.fmatter.rowactions.call(this,'cancel');" onmouseover="jQuery(this).addClass('ui-state-hover');" onmouseout="jQuery(this).removeClass('ui-state-hover');" data-original-title="Cancel">
		                                            <span class="ui-icon ui-icon-cancel"></span>
		                                        </div>
		                                    </div>
		                                </td>
		                                <td role="gridcell" style="" title="10" aria-describedby="grid-table_id">10</td>
		                                <td role="gridcell" style="" title="2007-12-03" aria-describedby="grid-table_sdate">2007-12-03</td>
		                                <td role="gridcell" style="" title="Desktop Computer" aria-describedby="grid-table_name">Desktop Computer</td>
		                                <td role="gridcell" style="" title="Yes" aria-describedby="grid-table_stock">Yes</td>
		                                <td role="gridcell" style="" title="FedEx" aria-describedby="grid-table_ship">FedEx</td>
		                                <td role="gridcell" style="" title="note" aria-describedby="grid-table_note">note</td></tr>
		                        </tbody>
		                    </table>
		                </div>
		            </div>
		        </div>
		        <div class="ui-jqgrid-resize-mark" id="rs_mgrid-table">&nbsp;</div>
		        <div id="grid-pager" class="ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr" style="width: 766px;">
		            <div id="pg_grid-pager" class="ui-pager-control" role="group">
		                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table" style="width:100%;table-layout:fixed;height:100%;" role="row">
		                    <tbody>
		                        <tr>
		                            <td id="grid-pager_left" align="left">
		                                <table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table navtable" style="float:left;table-layout:auto;">
		                                    <tbody>
		                                        <tr>
		                                            <td class="ui-pg-button ui-corner-all" title="" id="add_grid-table" data-original-title="Add new row">
		                                                <div class="ui-pg-div">
		                                                    <span class="ui-icon ace-icon fa fa-plus-circle purple"></span>
		                                                </div>
		                                            </td>
		                                            <td class="ui-pg-button ui-corner-all" title="" id="edit_grid-table" data-original-title="Edit selected row">
		                                                <div class="ui-pg-div">
		                                                    <span class="ui-icon ace-icon fa fa-pencil blue"></span>
		                                                </div>
		                                            </td>
		                                            <td class="ui-pg-button ui-corner-all" title="" id="view_grid-table" data-original-title="View selected row">
		                                                <div class="ui-pg-div">
		                                                    <span class="ui-icon ace-icon fa fa-search-plus grey"></span>
		                                                </div>
		                                            </td>
		                                            <td class="ui-pg-button ui-corner-all" title="" id="del_grid-table" data-original-title="Delete selected row">
		                                                <div class="ui-pg-div">
		                                                    <span class="ui-icon ace-icon fa fa-trash-o red"></span>
		                                                </div>
		                                            </td>
		                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;" data-original-title="" title="">
		                                                <span class="ui-separator"></span>
		                                            </td>
		                                            <td class="ui-pg-button ui-corner-all" title="" id="search_grid-table" data-original-title="Find records">
		                                                <div class="ui-pg-div">
		                                                    <span class="ui-icon ace-icon fa fa-search orange"></span>
		                                                </div>
		                                            </td>
		                                            <td class="ui-pg-button ui-corner-all" title="" id="refresh_grid-table" data-original-title="Reload Grid">
		                                                <div class="ui-pg-div">
		                                                    <span class="ui-icon ace-icon fa fa-refresh green"></span>
		                                                </div>
		                                            </td>
		                                        </tr>
		                                    </tbody>
		                                </table>
		                            </td>
		                            <td id="grid-pager_center" align="center" style="white-space: pre; width: 343px;">
		                                <table cellspacing="0" cellpadding="0" border="0" style="table-layout:auto;" class="ui-pg-table">
		                                    <tbody>
		                                        <tr>
		                                            <td id="first_grid-pager" class="ui-pg-button ui-corner-all ui-state-disabled">
		                                                <span class="ui-icon ace-icon fa fa-angle-double-left bigger-140"></span>
		                                            </td>
		                                            <td id="prev_grid-pager" class="ui-pg-button ui-corner-all ui-state-disabled">
		                                                <span class="ui-icon ace-icon fa fa-angle-left bigger-140"></span>
		                                            </td>
		                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;">
		                                                <span class="ui-separator"></span>
		                                            </td>
		                                            <td dir="ltr">Page
		                                                <input class="ui-pg-input" type="text" size="2" maxlength="7" value="0" role="textbox">of
		                                                <span id="sp_1_grid-pager">3</span></td>
		                                            <td class="ui-pg-button ui-state-disabled" style="width:4px;">
		                                                <span class="ui-separator"></span>
		                                            </td>
		                                            <td id="next_grid-pager" class="ui-pg-button ui-corner-all">
		                                                <span class="ui-icon ace-icon fa fa-angle-right bigger-140"></span>
		                                            </td>
		                                            <td id="last_grid-pager" class="ui-pg-button ui-corner-all">
		                                                <span class="ui-icon ace-icon fa fa-angle-double-right bigger-140"></span>
		                                            </td>
		                                            <td dir="ltr">
		                                                <select class="ui-pg-selbox" role="listbox">
		                                                    <option role="option" value="10" selected="selected">10</option>
		                                                    <option role="option" value="20">20</option>
		                                                    <option role="option" value="30">30</option></select>
		                                            </td>
		                                        </tr>
		                                    </tbody>
		                                </table>
		                            </td>
		                            <td id="grid-pager_right" align="right">
		                                <div dir="ltr" style="text-align:right" class="ui-paging-info">View 1 - 10 of 23</div></td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		        </div>
		    </div>
		    <script type="text/javascript">var $path_base = "."; //in Ace demo this will be used for editurl parameter
		        </script>
		    <!-- PAGE CONTENT ENDS --></div>
	</div>
@endsection