@extends('layouts.app')

@section('content')
<div class="container">
  <div class="scorecard">
    <h3 class="text-center">Spotlight pitch scorecard</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Score</th>
          <th>Impact</th>
          <th>Use Case</th>
          <th>Technology Platforms</th>
          <th>Organization/enablers</th>
          <th>X-Factor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="score">1</td>
          <td>Minor</td>
          <td>Sedikit bantuan untuk tugas user sehari-hari</td>
          <td>Penggunaan teknologi basic (mis. Perhitungan excel)</td>
          <td>Faktor enablers tidak tergambarkan dengan jelas</td>
          <td rowspan="4">Terdapat X-factor dimana juri dapat memberikan nilai tambahan sesuai judgment personal mereka</td>
        </tr>
        <tr>
          <td class="score">2</td>
          <td>Jelas dan terukur</td>
          <td>Mendukung untuk tugas tertentu</td>
          <td>Penggunaan complex analytics (mis. complex excel modelling)</td>
          <td>Change management dan struktur tata kelola yang bersifat dasar</td>
        </tr>
        <tr>
          <td class="score">3</td>
          <td>Dampak Major</td>
          <td>Dukungan yang besar dalam cara user menyelesaikan tugasnya</td>
          <td>Advanced analytics (mis. prediction model dengan machine learning)</td>
          <td>Change management dan struktur tata kelola yang jelas</td>
        </tr>
        <tr>
          <td class="score">4</td>
          <td>Perubahan revolusioner</td>
          <td>Mengubah pengalaman user dalam berinteraksi dengan sistem</td>
          <td>Cutting-edge technology (Gen AI, teknologi revolusioner)</td>
          <td>Well-defined approach dalam mengelola perubahan dan memastikan keberhasilan</td>
        </tr>
      </tbody>
    </table>
    {{-- <div class="jury-info">
      <div>Jury code: <strong>Juri A</strong></div>
      <div>Team number: <strong>Team 001</strong></div>
      <div>Total Score: <strong>XX</strong></div>
    </div> --}}
  </div>
</div>
@endsection