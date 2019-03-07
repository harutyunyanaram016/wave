@extends('layouts.orderbase')

@section('content')

    <div class="sectionMargin row">
        @include('errors/validation_error')
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="reg-form">
            <form action="{{route('order.index')}}" method="post" role="form" class="reg">
                {{ csrf_field() }}

                <h1>@lang('global.General_inform')</h1>

                <div class="form-group">
                    <label>@lang('global.Your_name')</label><br>
                    <input type="text" name="name" class="form-control" id="name"
                           placeholder="@lang('global.Your_name')"
                           data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                </div>

                <div class="form-group">
                    <label>@lang('global.Your_email')</label><br>
                    <input type="email" class="form-control" name="mail" id="email"
                           placeholder="@lang('global.Your_email')" data-rule="email"
                           data-msg="Please enter a valid email" required/>
                </div>

                <div class="form-group">
                    <label>@lang('global.Glb_phon')</label><br>
                    <input type="text" class="form-control" name="phone" id="phone"
                           placeholder="@lang('global.Glb_phon')"
                           data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                </div>

                <div class="form-group">
                    <label>@lang('global.Company_name')</label><br>
                    <input type="text" name="company_name" class="form-control" id="name"/>
                </div>


                <div class="form-group">
                    <label>@lang('global.Work_areas')</label><br>
                    <span>@lang('global.Work_areascontent')</span>
                    <input type="text" name="business" class="form-control" id="workarea" />
                </div>

                <h1>@lang('global.Site_design')</h1>

                <div class="form-group">
                    <label>@lang('global.Examp_likedesign')</label><br>
                    <span>@lang('global.Ardess_likedesign')</span>
                    <input type="text" name="design" class="form-control" id="name"/>
                </div>


                <h1>@lang('global.Site_function')</h1>


                <div class="form-group">
                    <label>@lang('global.Type_site')</label><br>
                    <span>@lang('global.Choose_site')</span><br>

                    <input type="radio" name="type"
                           value="@lang('global.Corpor_site')"><label>@lang('global.Corpor_site')</label> <br>
                    <input type="radio" name="type"
                           value="@lang('global.Corpor_catalog')"><label>@lang('global.Corpor_catalog')</label> <br>
                    <input type="radio" name="type"
                           value="@lang('global.Shop_online')"><label>@lang('global.Shop_online')</label> <br>
                    <input type="radio" name="type"
                           value="@lang('global.Lending')"><label>@lang('global.Lending')</label> <br>
                    <input type="radio" name="type" value="@lang('global.Other')"><label>@lang('global.Other')
                    </label>
                    <br>
                </div>

                <div class="form-group">
                    <label>@lang('global.Sales_serv')</label><br>
                    <span>@lang('global.Network_sales')</span><br>
                    <input type="checkbox" name="functions[]" id="name" value="@lang('global.Categories')"/><label>@lang('global.Categories')</label> <br>
                    <input type="checkbox" name="functions[]" id="name" value="@lang('global.Pr_filter')"/>
                    <label>@lang('global.Pr_filter')</label> <br>
                    <input type="checkbox" name="functions[]" id="name" value="@lang('global.Extend_descr')"/><label>@lang('global.Extend_descr')</label> <br>
                    <input type="checkbox" name="functions[]" id="name" value="@lang('global.Basket')"/>
                    <label>@lang('global.Basket')</label> <br>
                    <input type="checkbox" name="functions[]" id="name" value="@lang('global.Discnt_calcul')"/><label>@lang('global.Discnt_calcul')</label> <br>
                    <input type="checkbox" name="functions[]" id="name" value="@lang('global.Cost_delivery')"/><label>@lang('global.Cost_delivery')</label> <br>
                    <input type="checkbox" name="functions[]" id="name" value="@lang('global.Online_pay')"/>
                    <label>@lang('global.Online_pay')</label> <br>
                    <br>
                </div>

                <div class="form-group">
                    <label>@lang('global.Integr_servpr')</label><br>
                    <span>@lang('global.Spec_servintegr')</span><br>
                    <input type="checkbox" name="side_services[]" id="name" value="@lang('global.Importprc_excel')"/><label>@lang('global.Importprc_excel')</label> <br>
                    <input type="checkbox" name="side_services[]" id="name" value="@lang('global.Integr_c1')"/><label>@lang('global.Integr_c1')</label> <br>
                    <input type="checkbox" name="side_services[]" id="name" value="@lang('global.Integr_corpdata')"/><label>@lang('global.Integr_corpdata')</label> <br>
                    <br>
                </div>

                <div class="form-group">
                    <label>@lang('global.Lang_site')</label><br>
                    <span>@lang('global.Lang_translate')</span>
                    <input type="text" name="lang" class="form-control" id="name"/>
                </div>

                <div class="form-group">
                    <label>@lang('global.Other_purposes')</label><br>
                    <span>@lang('global.Օther_serv')</span>
                    <input type="text" name="other" class="form-control" id="name"/>
                </div>

                <h1>@lang('global.Site_struct')</h1>

                <div class="form-group">
                    <label>@lang('global.Site_section')</label><br>
                    <span>@lang('global.Desc_mainsect')</span>
                    <input type="text" name="sections" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label>@lang('global.Site_navig')</label><br>
                    <span>@lang('global.Menus_present')</span>
                    <input type="text" name="navigation" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label>@lang('global.Inform_blocks')</label><br>
                    <span>@lang('global.Present_pages')</span>
                    <input type="text" name="information_blocks" class="form-control" id="name"/>
                </div>

                <div class="form-group">
                    <label>@lang('global.Design_require')</label><br>
                    <span>@lang('global.Descr_require')</span>
                    <input type="text" name="desires" class="form-control" id="name"/>
                </div>

                <h1>@lang('global.Cont_serv')</h1>

                <div class="form-group">
                    <label>@lang('global.Cont_site')</label><br>
                    <input type="radio" name="conten"
                           value="@lang('global.Alr_ready')"><label>@lang('global.Alr_ready')</label> <br>
                    <input type="radio" name="conten"
                           value="@lang('global.Ser_writer')"><label>@lang('global.Ser_writer')</label> <br>
                    <input type="radio" name="conten"
                           value="@lang('global.Ph_required')"><label>@lang('global.Ph_required')</label> <br>
                    <input type="radio" name="conten" id="name" value="@lang('global.Tr_need')"/><label>@lang('global.Tr_need')</label> <br>
                </div>

                <div class="form-group">
                    <label>@lang('global.Addit_serv')</label><br>
                    <input type="checkbox" name="additional_services[]" id="name" value="@lang('global.Fill_cont')"/><label>@lang('global.Fill_cont')</label> <br>
                    <input type="checkbox" name="additional_services[]" id="name" value="@lang('global.Tech_supp')"/><label>@lang('global.Tech_supp')</label> <br>
                    <input type="checkbox" name="additional_services[]" id="name" value="@lang('global.Site_maint')"/><label>@lang('global.Site_maint')</label> <br>
                    <input type="checkbox" name="additional_services[]" id="name" value="@lang('global.Context_advert')"/><label>@lang('global.Context_advert')</label> <br>
                    <input type="checkbox" name="additional_services[]" id="name" value="@lang('global.SEO_prom')"/><label>@lang('global.SEO_prom')</label> <br>
                    <input type="checkbox" name="additional_services[]" id="name" value="@lang('global.Corp_ident')"/><label>@lang('global.Corp_ident')</label> <br>
                    <input type="checkbox" name="additional_services[]" id="name" value="@lang('global.Logo_develop')"/><label>@lang('global.Logo_develop')</label> <br>
                </div>
                <div class="text-center">
                    <input style="margin-bottom: 25px; padding: 10px 30px;" type="submit" class="btn btn-primary" value="@lang('global.Send')">
                </div>
            </form>
        </div>
    </div>

@endsection
