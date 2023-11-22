
interface IHistoryItem {
    title: string;
    index?: number
}
export default function History(){

    const HistoryItem = ( item : IHistoryItem ) => {
        return (
            <div className={'text-xs'}>
                <span>{ item.index }{`. `}{ item.title }</span>
            </div>
        )
    }

    const history : IHistoryItem[] = [
        {
            title : 'Add new chapter',
        },
        {
            title : 'Change last chapter',
        },
        {
            title : 'Remove all document',
        },
    ]

    return (
        <div className={'min-w-[18.5rem] w-[18.5rem] border-l-[1px] border-solid border-gray-200 px-3 py-3'}>
            <div className={'font-bold text-gray-700 mb-3'}>
                History of changes
            </div>
            <div>
                { history ? history.map( (item, index) =>
                    <HistoryItem
                        index={ index + 1 }
                        {...item}
                        key={`history-item-${index}`} />
                ) : '' }
            </div>
        </div>
    )

}