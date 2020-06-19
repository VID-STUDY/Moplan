@extends('layouts.app')

@section('title', 'Настройки')

@section('content')
    <form action="{{ route('admin.settings.store') }}" method="post">
        @csrf
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Настройки</h3>
                <div class="block-options">
                    <button type="submit" class="btn btn-alt-success"><i class="fa fa-check"></i> Сохранить</button>
                </div>
            </div>
            <div class="block-content">
                <h2 class="content-heading">Тарифы</h2>
                <h3 class="font-size-h5 font-w600">Тарифы для соискателей</h3>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <div class="form-material floating">
                                <input type="text" name="contractor_tariff_1" id="contractor_tariff_1" required class="form-control" value="{{ $settings->contractor_tariff_1 }}">
                                <label for="contractor_tariff_1">Тариф для соискателей #1 (1-резюме)</label>
                                <div class="form-text text-muted text-right">Цена за одно резюме!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <div class="form-material floating">
                                <input type="text" name="contractor_tariff_2" id="contractor_tariff_2" required class="form-control" value="{{ $settings->contractor_tariff_2 }}">
                                <label for="contractor_tariff_2">Тариф для соискателей #2 (2-резюме)</label>
                                <div class="form-text text-muted text-right">Цена за одно резюме!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <div class="form-material floating">
                                <input type="text" name="contractor_tariff_3" id="contractor_tariff_3" required class="form-control" value="{{ $settings->contractor_tariff_3 }}">
                                <label for="contractor_tariff_3">Тариф для соискателей #3 (3-резюме)</label>
                                <div class="form-text text-muted text-right">Цена за одно резюме!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="font-size-h5 font-w600">Тарифы для работодателей</h3>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <div class="form-material floating">
                                <input type="text" name="employer_tariff_1" id="employer_tariff_1" required class="form-control" value="{{ $settings->employer_tariff_1 }}">
                                <label for="employer_tariff_1">Тариф для работодателей #1 (1-вакансия)</label>
                                <div class="form-text text-muted text-right">Цена за одну вакансию!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <div class="form-material floating">
                                <input type="text" name="employer_tariff_2" id="employer_tariff_2" required class="form-control" value="{{ $settings->employer_tariff_2 }}">
                                <label for="employer_tariff_2">Тариф для работодателей #2 (2-вакансии)</label>
                                <div class="form-text text-muted text-right">Цена за одну вакансию!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <div class="form-material floating">
                                <input type="text" name="employer_tariff_3" id="employer_tariff_3" required class="form-control" value="{{ $settings->employer_tariff_3 }}">
                                <label for="employer_tariff_3">Тариф для работодателей #3 (3-вакансии)</label>
                                <div class="form-text text-muted text-right">Цена за одну вакансию!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="content-heading">Настройка текста</h2>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="faq">Вопросы и ответы</label>
                            <textarea name="faq" id="faq" class="form-control">{!! $settings->faq !!}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="about">О нас</label>
                            <textarea name="about" id="about" class="form-control">{!! $settings->about !!}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="partners">Наши партнёры</label>
                            <textarea name="partners" id="partners" class="form-control">{!! $settings->partners !!}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="news">Новости</label>
                            <textarea name="news" id="news" class="form-control">{!! $settings->news !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection