@extends('layouts.app')

@section('content')
<section class="title">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="text-center mt-5">Score Card</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="scorecard m-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Score</th>
                <th scope="col">Impact</th>
                <th scope="col">Use Case</th>
                <th scope="col">Technology Platforms</th>
                <th scope="col">Organizations/Enablers</th>
                <th scope="col">X-Factor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><strong>Minor</strong></td>
                <td>
                  <strong>Sedikit bantuan</strong> untuk tugas user
                  sehari-hari
                </td>
                <td>
                  <strong>Penggunaan teknologi basic</strong> (misal
                  perhitungan excel)
                </td>
                <td>
                  Faktor enablers <strong>tidak tergambarkan</strong> dengan
                  jelas
                </td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><strong>Jelas dan Terukur</strong></td>
                <td>Mendukung untuk <strong>tugas tertentu</strong></td>
                <td>
                  Penggunaan <strong>complex analytics</strong> (misal complex
                  excel modelling)
                </td>
                <td>
                  Change management dan struktur tata kelola yang
                  <strong>bersifat dasar</strong>
                </td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td><strong>Dampak Major</strong></td>
                <td>
                  <strong>Dukungan yang besar</strong> dalam cara user
                  menyelesaikan tugasnya
                </td>
                <td>
                  <strong>Advanced analitycs</strong> (misal prediction model
                  dengan machine learning)
                </td>
                <td>
                  Change management dan struktur tata kelola <strong></strong>
                </td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td><strong>Perubahan Revolusioner</strong></td>
                <td>
                  <strong>Mengubah pengalaman</strong> user dalam berinteraksi
                  dengan sistem
                </td>
                <td>
                  <strong>Cutting-edge technology</strong> (Gen AI, teknologi
                  revolusioner)
                </td>
                <td>
                  <strong>Well-defined approach</strong> dalam mengelola
                  perubahan da memastikan keberhasilan
                </td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <a href="/penilaian" class="btn btn-md btn-primary w-100"
            >Kembali ke Home</a
          >
        </div>
      </div>
    </div>
  </section>
@endsection