import classNames from "classnames";

interface IHistoryItem {
    title: string;
    index?: number
}

interface IHistory{
    isMobile?: boolean;
}
export default function History( props : IHistory ){

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

    const cls : string[] = [];

    if ( !props?.isMobile ){
        cls.push('xl:block hidden min-w-[18.5rem] w-[18.5rem] border-l-[1px] border-solid border-gray-200 px-3 py-3')
    }

    return (
        <div className={classNames( cls.join(' ')) }>
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
