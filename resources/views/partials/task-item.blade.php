<div class="task-card">
    <div class="task-info">
        <h3>{{ $item['nama'] }}</h3>
        <p>{{ $item['matkul'] }}</p>
        <small>Deadline: {{ $item['deadline'] }}</small>
    </div>

    <span class="badge badge-{{ strtolower(str_replace(' ', '-', $item['status'])) }}">
        {{ $item['status'] }}
    </span>
</div>